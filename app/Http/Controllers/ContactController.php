<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }

    public function store(Request $request): RedirectResponse
    {
        // Rate limiting – max 5 attempts per minute per IP
        $key = 'contact-form:' . $request->ip();
        if (RateLimiter::tooManyAttempts($key, 5)) {
            return back()->withErrors(['general' => 'Demasiados intentos. Por favor, espera unos minutos.'])->withInput();
        }
        RateLimiter::hit($key, 60);

        $validated = $request->validate([
            'name'            => 'required|string|min:2|max:100',
            'email'           => 'required|email|max:150',
            'phone'           => 'nullable|string|max:30',
            'company'         => 'nullable|string|max:100',
            'subject'         => 'nullable|string|max:150',
            'message'         => 'required|string|min:10|max:3000',
            'type'            => 'nullable|in:general,presupuesto,tecnico',
            'product_ref'     => 'nullable|string|max:150',
            'privacy_accepted'=> 'required|accepted',
        ], [
            'name.required'            => 'El nombre es obligatorio.',
            'name.min'                 => 'El nombre debe tener al menos 2 caracteres.',
            'email.required'           => 'El email es obligatorio.',
            'email.email'              => 'El email no tiene un formato válido.',
            'message.required'         => 'El mensaje es obligatorio.',
            'message.min'              => 'El mensaje debe tener al menos 10 caracteres.',
            'privacy_accepted.required'=> 'Debes aceptar la política de privacidad.',
            'privacy_accepted.accepted'=> 'Debes aceptar la política de privacidad.',
        ]);

        $message = ContactMessage::create([
            'name'             => $validated['name'],
            'email'            => $validated['email'],
            'phone'            => $validated['phone'] ?? null,
            'company'          => $validated['company'] ?? null,
            'subject'          => $validated['subject'] ?? null,
            'message'          => $validated['message'],
            'type'             => $validated['type'] ?? 'general',
            'product_ref'      => $validated['product_ref'] ?? null,
            'privacy_accepted' => true,
            'ip_address'       => $request->ip(),
        ]);

        // Send notification email to the business
        try {
            $to = config('mail.contact_to', env('MAIL_CONTACT_TO', 'info@cuttingeuropean.com'));
            Mail::raw(
                "Nuevo mensaje de contacto\n\n"
                . "Nombre: {$message->name}\n"
                . "Email: {$message->email}\n"
                . "Teléfono: {$message->phone}\n"
                . "Empresa: {$message->company}\n"
                . "Tipo: {$message->type}\n"
                . "Ref. producto: {$message->product_ref}\n"
                . "Asunto: {$message->subject}\n\n"
                . "Mensaje:\n{$message->message}",
                fn($mail) => $mail->to($to)
                    ->subject("Web CuttingEuropean – Nuevo contacto: {$message->name}")
                    ->replyTo($message->email, $message->name)
            );
        } catch (\Throwable) {
            // Log silently – the message is already saved in DB
            logger()->error('ContactController: Could not send notification email', ['id' => $message->id]);
        }

        return redirect()->route('contact')->with('success', '¡Mensaje enviado! Nos pondremos en contacto contigo en breve.');
    }
}
