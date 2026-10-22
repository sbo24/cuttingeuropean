<div x-data="{ 
        open: false,
        productName: '',
        productRef: '',
        loading: false,
        init() {
            window.addEventListener('open-quote-modal', (e) => {
                this.productName = e.detail?.product || '';
                this.productRef = e.detail?.ref || '';
                this.open = true;
            });
        }
     }"
     x-show="open"
     x-cloak
     class="fixed inset-0 z-50 overflow-y-auto"
     aria-labelledby="modal-title" role="dialog" aria-modal="true"
     style="display: none;">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div x-show="open" 
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 bg-gray-950/80 backdrop-blur-sm transition-opacity" 
             @click="open = false" 
             aria-hidden="true"></div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div x-show="open" 
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full border border-gray-200">
            
            <!-- Header -->
            <div class="bg-gray-900 px-6 py-5 text-white flex items-center justify-between border-b border-gray-800">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-blue-600/30 border border-blue-500/40 flex items-center justify-center text-blue-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white" id="modal-title">Solicitar Presupuesto Técnico</h3>
                        <p class="text-xs text-gray-400">Respuesta en menos de 24 horas laborables</p>
                    </div>
                </div>
                <button @click="open = false" type="button" class="text-gray-400 hover:text-white transition-colors cursor-pointer p-1">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Form -->
            <form action="{{ route('contact.store') }}" method="POST" class="p-6 space-y-4" @submit="loading = true">
                @csrf
                <input type="hidden" name="type" value="presupuesto">
                
                <div x-show="productName" class="p-3 bg-blue-50 border border-blue-200 rounded-lg text-sm text-blue-900 flex items-center justify-between">
                    <div>
                        <span class="text-xs font-semibold text-blue-700 uppercase tracking-wider block">Maquinaria de interés:</span>
                        <span class="font-bold" x-text="productName"></span>
                    </div>
                    <span class="px-2 py-1 bg-blue-600 text-white text-xs font-semibold rounded" x-text="productRef"></span>
                    <input type="hidden" name="product_ref" :value="productName + (productRef ? ' (' + productRef + ')' : '')">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Nombre Completo *</label>
                        <input type="text" name="name" required class="w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="Tu nombre">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Empresa / Razón Social *</label>
                        <input type="text" name="company" required class="w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="Empresa S.L.">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Email Profesional *</label>
                        <input type="email" name="email" required class="w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="nombre@empresa.com">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Teléfono Directo *</label>
                        <input type="tel" name="phone" required class="w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="+34 600 000 000">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Requisitos de Corte / Comentarios *</label>
                    <textarea name="message" rows="3" required class="w-full px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg text-sm text-gray-900 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" placeholder="Dimensiones del material, cadencia de corte requerida, tipo de aleación (acero, aluminio, inox)..."></textarea>
                </div>

                <div class="flex items-start gap-2 pt-1">
                    <input type="checkbox" name="privacy_accepted" id="modal_privacy" required class="mt-1 h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <label for="modal_privacy" class="text-xs text-gray-500 leading-snug">
                        He leído y acepto la <a href="{{ route('legal.privacidad') }}" target="_blank" class="text-blue-600 underline hover:text-blue-700">política de privacidad</a> para el tratamiento de mis datos de contacto comercial.
                    </label>
                </div>

                <div class="pt-3 border-t border-gray-100 flex items-center justify-end gap-3">
                    <button @click="open = false" type="button" class="px-4 py-2.5 rounded-lg border border-gray-300 text-sm font-semibold text-gray-700 hover:bg-gray-100 transition-colors cursor-pointer">
                        Cancelar
                    </button>
                    <button type="submit" :disabled="loading" class="px-6 py-2.5 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold shadow-md hover:shadow-lg transition-all flex items-center gap-2 cursor-pointer">
                        <svg x-show="loading" class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span>Enviar Solicitud</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
