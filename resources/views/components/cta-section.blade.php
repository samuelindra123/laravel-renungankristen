{{-- CTA Section Component --}}
<section class="bg-gradient-to-r from-primary-600 to-secondary-600 py-20 relative overflow-hidden">
    {{-- Decorative Elements --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-64 h-64 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>

    <div class="container relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white space-y-8">
            <h2 class="text-3xl md:text-5xl font-bold leading-tight">
                Siap Memulai Perjalanan Iman Anda?
            </h2>
            <p class="text-xl text-primary-100 max-w-2xl mx-auto">
                Bergabunglah dengan ribuan orang yang telah menemukan kedamaian dan pertumbuhan spiritual bersama kami.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center pt-4">
                <a href="#" class="bg-white text-primary-600 px-8 py-4 rounded-lg font-semibold hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group">
                    Daftar Sekarang - Gratis
                    <svg class="inline w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="{{ route('about') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-primary-600 transition-all duration-300">
                    Pelajari Lebih Lanjut
                </a>
            </div>

            <div class="flex flex-wrap justify-center gap-6 pt-8 text-sm text-primary-100">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Gratis Selamanya
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Tanpa Kartu Kredit
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Setup 2 Menit
                </div>
            </div>
        </div>
    </div>
</section>