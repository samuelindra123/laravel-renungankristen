<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        
        <div class="text-center mb-8">
            <div class="flex justify-center mb-4">
                <div class="bg-gradient-to-br from-indigo-600 to-purple-600 p-4 rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
            </div>
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Renungan Kristen</h2>
            <p class="text-gray-600">Bergabunglah dalam persekutuan</p>
        </div>

        <div class="bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl p-8 border border-white/20">
            <div class="mb-6">
                <h3 class="text-2xl font-semibold text-gray-800 text-center">Daftar Akun</h3>
                <p class="text-gray-500 text-center mt-1">Mulai perjalanan rohani Anda ✨</p>
            </div>

            <form wire:submit.prevent="register" class="space-y-5">
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Nama Lengkap
                        </span>
                    </label>
                    <input 
                        type="text" 
                        wire:model="name"
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-indigo-500 focus:ring focus:ring-indigo-200 transition-all duration-200 @error('name') border-red-500 @enderror"
                        placeholder="John Doe"
                    >
                    @error('name') 
                        <p class="mt-1 text-sm text-red-600 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                            </svg>
                            Email
                        </span>
                    </label>
                    <input 
                        type="email" 
                        wire:model="email"
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-indigo-500 focus:ring focus:ring-indigo-200 transition-all duration-200 @error('email') border-red-500 @enderror"
                        placeholder="nama@email.com"
                    >
                    @error('email') 
                        <p class="mt-1 text-sm text-red-600 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            Password
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
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Konfirmasi Password
                        </span>
                    </label>
                    <input 
                        type="password" 
                        wire:model="password_confirmation"
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-indigo-500 focus:ring focus:ring-indigo-200 transition-all duration-200"
                        placeholder="••••••••"
                    >
                </div>

                <div>
                    <label class="flex items-start gap-2">
                        <input 
                            type="checkbox" 
                            wire:model="terms"
                            class="w-4 h-4 mt-1 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 @error('terms') border-red-500 @enderror"
                        >
                        <span class="text-sm text-gray-600">
                            Saya setuju dengan 
                            <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">syarat dan ketentuan</a>
                            serta 
                            <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">kebijakan privasi</a>
                        </span>
                    </label>
                    @error('terms') 
                        <p class="mt-1 text-sm text-red-600 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center gap-2"
                    wire:loading.attr="disabled"
                    wire:loading.class="opacity-75 cursor-not-allowed"
                >
                    <span wire:loading.remove wire:target="register">Daftar Sekarang</span>

                    <svg wire:loading wire:target="register" class="hidden animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>

            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600">
                    Sudah punya akun? 
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                        Masuk di sini
                    </a>
                </p>
            </div>
        </div>

        <div class="mt-8 text-center">
            <p class="text-gray-500 text-sm italic">
                "Sebab Aku ini mengetahui rancangan-Ku mengenai kamu, rancangan damai sejahtera dan bukan rancangan kecelakaan"
                <br>
                <span class="font-semibold">- Yeremia 29:11</span>
            </p>
        </div>

    </div>
</div>
