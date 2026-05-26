@php
    $generalSettings = app(\App\Settings\GeneralSettings::class);
@endphp

@if($generalSettings->popup_enabled)
<div x-data="popupLead()" 
     x-show="show" 
     x-init="initPopup()"
     class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-black/50 backdrop-blur-sm"
     x-cloak
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0">
    
    <div class="bg-white dark:bg-gray-900 rounded-2xl shadow-2xl max-w-md w-full overflow-hidden relative" 
         @click.away="close()">
        <button @click="close()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="p-8">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">{{ $generalSettings->popup_title }}</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-6">{{ $generalSettings->popup_description }}</p>

            <form @submit.prevent="submit">
                <div class="space-y-4">
                    <div>
                        <input type="text" x-model="formData.name" placeholder="Your Name" required
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-[var(--primary-color)] outline-none">
                    </div>
                    <div>
                        <input type="email" x-model="formData.email" placeholder="Your Email" required
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-[var(--primary-color)] outline-none">
                    </div>
                    <div>
                        <button type="submit" :disabled="loading"
                                class="w-full py-3 bg-[var(--primary-color)] text-white font-semibold rounded-lg hover:opacity-90 transition-opacity disabled:opacity-50">
                            <span x-show="!loading">Send Message</span>
                            <span x-show="loading">Sending...</span>
                        </button>
                    </div>
                </div>
            </form>
            
            <p x-show="message" x-text="message" class="mt-4 text-green-600 font-medium text-center"></p>
        </div>
    </div>
</div>

<script>
function popupLead() {
    return {
        show: false,
        loading: false,
        message: '',
        formData: {
            name: '',
            email: ''
        },
        initPopup() {
            const hasClosed = localStorage.getItem('popup_closed');
            if (!hasClosed) {
                setTimeout(() => {
                    this.show = true;
                }, {{ $generalSettings->popup_delay * 1000 }});
            }
        },
        close() {
            this.show = false;
            localStorage.setItem('popup_closed', 'true');
        },
        async submit() {
            this.loading = true;
            try {
                const response = await fetch('{{ route('popup-lead.store') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(this.formData)
                });
                const data = await response.json();
                this.message = data.message;
                setTimeout(() => {
                    this.close();
                }, 2000);
            } catch (error) {
                console.error(error);
            } finally {
                this.loading = false;
            }
        }
    }
}
</script>
@endif
