{{-- 
  Header Modern & Professional dengan Animasi Smooth
  - Sticky header dengan backdrop blur saat scroll
  - Hover effects yang smooth dan modern
  - Button dengan gradient dan shadow
  - Mobile responsive (tersedia jika dibutuhkan)
--}}
<header class="bg-white border-b border-light-border sticky top-0 z-50 transition-all duration-300">
    <div class="container">
        <div class="flex justify-between items-center py-4">
            
            {{-- Logo dengan efek hover scale --}}
            <a href="/" class="group flex items-center gap-2 no-underline">
                <div class="w-10 h-10 bg-gradient-to-br from-primary-500 to-primary-700 rounded-lg flex items-center justify-center transform transition-transform duration-300 group-hover:scale-110 group-hover:rotate-3 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <span class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-primary-800 bg-clip-text text-transparent">
                    RenunganKristen
                </span>
            </a>

            {{-- Navigation dengan indikator aktif --}}
            <nav class="flex items-center gap-8">
                {{-- Nav Links dengan underline animation --}}
                <div class="flex items-center gap-8">
                    <a href="/" class="relative text-secondary-600 hover:text-primary-600 no-underline font-medium transition-colors duration-300 group">
                        <span>Home</span>
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary-500 to-primary-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    
                    <a href="/about" class="relative text-secondary-600 hover:text-primary-600 no-underline font-medium transition-colors duration-300 group">
                        <span>About Me</span>
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary-500 to-primary-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    
                    <a href="/contact" class="relative text-secondary-600 hover:text-primary-600 no-underline font-medium transition-colors duration-300 group">
                        <span>Contact</span>
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary-500 to-primary-700 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </div>

                {{-- Auth Buttons dengan gradient dan shadow modern --}}
                <div class="flex items-center gap-3">
                    {{-- Login Button - Outline style --}}
                    <a href="/login" class="group relative px-6 py-2.5 rounded-lg font-semibold no-underline overflow-hidden transition-all duration-300">
                        <span class="relative z-10 text-primary-600 group-hover:text-white transition-colors duration-300">
                            Login
                        </span>
                        <div class="absolute inset-0 border-2 border-primary-600 rounded-lg transition-all duration-300"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-600 to-primary-700 rounded-lg transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                    </a>
                    
                    {{-- Register Button - Solid gradient dengan shadow --}}
                    <a href="/register" class="group relative px-6 py-2.5 rounded-lg font-semibold no-underline overflow-hidden shadow-lg shadow-primary-500/30 hover:shadow-xl hover:shadow-primary-500/40 transition-all duration-300">
                        <span class="relative z-10 text-white flex items-center gap-2">
                            Daftar
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-600 to-primary-700 rounded-lg"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-primary-700 to-primary-800 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>

{{-- Optional: Tambahkan script untuk efek blur saat scroll --}}
<script>
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 10) {
            header.classList.add('backdrop-blur-sm', 'bg-white/95', 'shadow-sm');
        } else {
            header.classList.remove('backdrop-blur-sm', 'bg-white/95', 'shadow-sm');
        }
    });
</script>