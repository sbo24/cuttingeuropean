<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'company', 'subject', 'message',
        'type', 'product_ref', 'privacy_accepted', 'ip_address', 'status',
    ];

    protected $casts = [
        'privacy_accepted' => 'boolean',
    ];
}
