<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        
        <!-- Logo & Header -->
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
                <div class="bg-gradient-to-br from-indigo-600 to-purple-600 p-4 rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
            </div>
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Lupa Password?</h2>
            <p class="text-gray-600">Jangan khawatir, kami akan membantumu</p>
        </div>

        @if(!$emailSent)
            <!-- Form Card -->
            <div class="bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl p-8 border border-white/20 animate-fade-in">
                <div class="mb-6">
                    <div class="bg-indigo-50 border-l-4 border-indigo-600 p-4 rounded-lg mb-6">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-indigo-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            <div>
                                <h4 class="text-sm font-semibold text-indigo-800 mb-1">Informasi</h4>
                                <p class="text-sm text-indigo-700">
                                    Masukkan email yang terdaftar, kami akan mengirimkan link untuk reset password ke email Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <form wire:submit.prevent="sendResetLink" class="space-y-5">
                    
                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                Email Terdaftar
                            </span>
                        </label>
                        <input 
                            type="email" 
                            wire:model="email"
                            class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-indigo-500 focus:ring focus:ring-indigo-200 transition-all duration-200 @error('email') border-red-500 @enderror"
                            placeholder="nama@email.com"
                            autofocus
                        >
                        @error('email') 
                            <p class="mt-1 text-sm text-red-600 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror

                        @if($emailError)
                            <p class="mt-1 text-sm text-red-600 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $emailError }}
                            </p>
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center gap-2"
                        wire:loading.attr="disabled"
                    >
                        <span wire:loading.remove wire:target="sendResetLink" class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Kirim Link Reset
                        </span>
                        <span wire:loading wire:target="sendResetLink" class="flex items-center gap-2">
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Mengirim...
                        </span>
                    </button>

                </form>

                <!-- Back to Login -->
                <div class="mt-6 text-center">
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Kembali ke Login
                    </a>
                </div>
            </div>

        @else
            <!-- Success Card -->
            <div class="bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl p-8 border border-white/20 animate-scale-in">
                <div class="text-center">
                    <!-- Success Icon -->
                    <div class="flex justify-center mb-6">
                        <div class="bg-green-100 rounded-full p-4 animate-pulse-slow">
                            <svg class="w-16 h-16 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"/>
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Email Terkirim! 📧</h3>
                    <p class="text-gray-600 mb-6">
                        Kami telah mengirimkan link reset password ke email:
                        <br>
                        <span class="font-semibold text-indigo-600">{{ $email }}</span>
                    </p>

                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 mb-6">
                        <div class="flex items-start gap-3 text-left">
                            <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            <div class="text-sm text-blue-800">
                                <p class="font-semibold mb-1">Langkah selanjutnya:</p>
                                <ol class="list-decimal list-inside space-y-1 text-blue-700">
                                    <li>Periksa inbox email Anda</li>
                                    <li>Klik link reset password</li>
                                    <li>Buat password baru</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <button 
                            wire:click="$set('emailSent', false)"
                            class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200"
                        >
                            Kirim Ulang Email
                        </button>

                        <a 
                            href="{{ route('login') }}"
                            class="block w-full bg-white text-gray-700 py-3 rounded-xl font-semibold border-2 border-gray-300 hover:bg-gray-50 transition-all duration-200"
                        >
                            Kembali ke Login
                        </a>
                    </div>

                    <p class="text-xs text-gray-500 mt-4">
                        Tidak menerima email? Periksa folder spam atau tunggu beberapa menit
                    </p>
                </div>
            </div>
        @endif

        <!-- Footer Quote -->
        <div class="mt-8 text-center">
            <p class="text-gray-500 text-sm italic">
                "Ia yang memulai pekerjaan yang baik di antara kamu akan meneruskannya sampai pada akhirnya"
                <br>
                <span class="font-semibold">- Filipi 1:6</span>
            </p>
        </div>

    </div>
</div>