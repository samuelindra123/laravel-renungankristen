<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        
        <!-- Logo & Header -->
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
                <div class="bg-gradient-to-br from-indigo-600 to-purple-600 p-4 rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                    </svg>
                </div>
            </div>
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Reset Password</h2>
            <p class="text-gray-600">Buat password baru untuk akun Anda</p>
        </div>

        @if(!$resetSuccess)
            <!-- Form Card -->
            <div class="bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl p-8 border border-white/20 animate-fade-in">
                
                <form wire:submit.prevent="resetPassword" class="space-y-5">
                    
                    <!-- Email (Read Only) -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                Email
                            </span>
                        </label>
                        <input 
                            type="email" 
                            wire:model="email"
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 bg-gray-50 cursor-not-allowed"
                            readonly
                        >
                    </div>

                    <!-- Password Baru -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                                Password Baru
                            </span>
                        </label>
                        <input 
                            type="password" 
                            wire:model="password"
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-indigo-500 focus:ring focus:ring-indigo-200 transition-all duration-200 @error('password') border-red-500 @enderror"
                            placeholder="••••••••"
                        >
                        @error('password') 
                            <p class="mt-1 text-sm text-red-600 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror

                        <!-- Password Strength Indicator -->
                        @if(strlen($password) > 0)
                            <div class="mt-2">
                                <div class="flex gap-1 mb-1">
                                    <div class="h-1 flex-1 rounded-full {{ strlen($password) >= 2 ? 'bg-red-500' : 'bg-gray-200' }}"></div>
                                    <div class="h-1 flex-1 rounded-full {{ strlen($password) >= 4 ? 'bg-yellow-500' : 'bg-gray-200' }}"></div>
                                    <div class="h-1 flex-1 rounded-full {{ strlen($password) >= 6 ? 'bg-green-500' : 'bg-gray-200' }}"></div>
                                </div>
                                <p class="text-xs {{ strlen($password) >= 6 ? 'text-green-600' : 'text-gray-500' }}">
                                    @if(strlen($password) < 6)
                                        Password terlalu lemah
                                    @else
                                        Password cukup kuat
                                    @endif
                                </p>
                            </div>
                        @endif
                    </div>

                    <!-- Konfirmasi Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Konfirmasi Password Baru
                            </span>
                        </label>
                        <input 
                            type="password" 
                            wire:model="password_confirmation"
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-indigo-500 focus:ring focus:ring-indigo-200 transition-all duration-200"
                            placeholder="••••••••"
                        >
                    </div>

                    <!-- Info Box -->
                    <div class="bg-indigo-50 border-l-4 border-indigo-600 p-4 rounded-lg">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-indigo-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h4 class="text-sm font-semibold text-indigo-800 mb-1">Tips Password Aman:</h4>
                                <ul class="text-sm text-indigo-700 space-y-1">
                                    <li>• Minimal 6 karakter</li>
                                    <li>• Kombinasi huruf dan angka</li>
                                    <li>• Hindari password yang mudah ditebak</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center gap-2"
                        wire:loading.attr="disabled"
                    >
                        <span wire:loading.remove wire:target="resetPassword" class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Reset Password
                        </span>
                        <span wire:loading wire:target="resetPassword" class="flex items-center gap-2">
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Memproses...
                        </span>
                    </button>

                </form>
            </div>

        @else
            <!-- Success Card -->
            <div class="bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl p-8 border border-white/20 animate-scale-in">
                <div class="text-center">
                    <!-- Success Icon with Animation -->
                    <div class="flex justify-center mb-6">
                        <div class="bg-green-100 rounded-full p-4 animate-bounce">
                            <svg class="w-16 h-16 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Password Berhasil Direset! 🎉</h3>
                    <p class="text-gray-600 mb-6">
                        Password Anda telah berhasil diubah. Sekarang Anda dapat login dengan password baru.
                    </p>

                    <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-6">
                        <p class="text-sm text-green-800">
                            <span class="font-semibold">Anda akan diarahkan ke halaman login dalam 3 detik...</span>
                        </p>
                    </div>

                    <a 
                        href="{{ route('login') }}"
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-8 py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        Login Sekarang
                    </a>
                </div>
            </div>

            <!-- Auto Redirect Script -->
            <script>
                setTimeout(function() {
                    window.location.href = "{{ route('login') }}";
                }, 3000);
            </script>
        @endif

        <!-- Footer Quote -->
        <div class="mt-8 text-center">
            <p class="text-gray-500 text-sm italic">
                "Ciptakanlah hati yang tahir di dalam daku, ya Allah, dan perbaharuilah batinku dengan roh yang teguh!"
                <br>
                <span class="font-semibold">- Mazmur 51:12</span>
            </p>
        </div>

    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('livewire:init', () => {
        Livewire.on('password-reset-success', () => {
            setTimeout(() => {
                window.location.href = "{{ route('login') }}";
            }, 3000);
        });
    });
</script>
@endpush