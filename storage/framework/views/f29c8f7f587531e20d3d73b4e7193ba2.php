<div x-data="cookieConsent()" 
     x-show="showBanner" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 transform translate-y-4"
     x-transition:enter-end="opacity-100 transform translate-y-0"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 transform translate-y-0"
     x-transition:leave-end="opacity-0 transform translate-y-4"
     class="fixed bottom-4 left-4 right-4 md:left-6 md:right-auto md:max-w-md z-50 bg-gray-900/95 backdrop-blur-md text-white rounded-xl shadow-2xl border border-gray-800 p-5"
     style="display: none;">
    <div class="flex items-start gap-4">
        <div class="w-10 h-10 rounded-lg bg-blue-600/20 text-blue-400 flex items-center justify-center shrink-0 border border-blue-500/30">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
        </div>
        <div class="flex-1">
            <h4 class="text-sm font-semibold tracking-wide text-white uppercase">Gestión de Privacidad & Cookies</h4>
            <p class="text-xs text-gray-300 mt-1 leading-relaxed">
                Utilizamos cookies técnicas y analíticas para optimizar tu experiencia B2B y ofrecerte el mejor asesoramiento técnico. Consulta nuestra 
                <a href="<?php echo e(route('legal.cookies')); ?>" class="text-blue-400 underline hover:text-blue-300">política de cookies</a>.
            </p>
            <div class="mt-4 flex flex-wrap items-center gap-2">
                <button @click="acceptAll()" type="button" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition-colors shadow-sm cursor-pointer">
                    Aceptar todas
                </button>
                <button @click="acceptEssential()" type="button" class="px-3 py-2 bg-gray-800 hover:bg-gray-700 text-gray-300 text-xs font-medium rounded-lg transition-colors border border-gray-700 cursor-pointer">
                    Solo esenciales
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function cookieConsent() {
        return {
            showBanner: false,
            init() {
                if (!localStorage.getItem('ce_cookie_consent')) {
                    setTimeout(() => { this.showBanner = true; }, 800);
                }
            },
            acceptAll() {
                localStorage.setItem('ce_cookie_consent', 'all');
                this.showBanner = false;
            },
            acceptEssential() {
                localStorage.setItem('ce_cookie_consent', 'essential');
                this.showBanner = false;
            }
        }
    }
</script>
<?php /**PATH C:\Users\sbarrajon\Desktop\DESARROLLO\cuttingeuropean\resources\views\partials\cookie-banner.blade.php ENDPATH**/ ?>