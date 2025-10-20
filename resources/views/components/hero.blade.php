<section class="relative bg-white py-20 lg:py-32 overflow-hidden">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-[0.03]">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, rgb(0 0 0) 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>

    <div class="container relative">
        <div class="text-center space-y-8 max-w-5xl mx-auto">
            {{-- Icon Feature Row --}}
            <div class="flex justify-center gap-4 mb-8">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center transform rotate-3 hover:rotate-0 transition-transform">
                    <svg class="w-6 h-6 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                    </svg>
                </div>
                <div class="w-12 h-12 bg-secondary-100 rounded-lg flex items-center justify-center transform -rotate-3 hover:rotate-0 transition-transform">
                    <svg class="w-6 h-6 text-secondary-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center transform rotate-6 hover:rotate-0 transition-transform">
                    <svg class="w-6 h-6 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/>
                    </svg>
                </div>
            </div>

            {{-- Main Content --}}
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-dark-text leading-tight">
                Temukan Kedamaian &<br>
                <span class="relative inline-block">
                    Tumbuh Bersama
                    <div class="absolute -bottom-2 left-0 right-0 h-4 bg-primary-200 -skew-x-12 -z-10"></div>
                </span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto">
                Bergabunglah dengan <strong class="text-primary-600 font-semibold">10,000+</strong> orang dalam komunitas untuk berbagi renungan, doa, dan berkat setiap hari.
            </p>

            {{-- CTA dengan Form --}}
            <div class="max-w-md mx-auto pt-4">
                <form class="flex flex-col sm:flex-row gap-3">
                    <input 
                        type="email" 
                        placeholder="Masukkan email Anda" 
                        class="flex-1 px-6 py-4 border-2 border-gray-200 rounded-lg focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all"
                    >
                    <button type="submit" class="btn btn-primary btn-lg whitespace-nowrap">
                        Mulai Gratis
                    </button>
                </form>
                <p class="text-sm text-gray-500 mt-4">
                    ✓ Gratis selamanya &nbsp;&nbsp; ✓ Tidak perlu kartu kredit &nbsp;&nbsp; ✓ Setup 2 menit
                </p>
            </div>

            {{-- Features Grid --}}
            <div class="grid sm:grid-cols-3 gap-6 pt-16 max-w-3xl mx-auto">
                <div class="text-center p-6 rounded-xl bg-gray-50 hover:bg-primary-50 hover:shadow-lg transition-all group">
                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-md group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-dark-text mb-2">Renungan Harian</h3>
                    <p class="text-sm text-gray-600">Inspirasi setiap pagi</p>
                </div>

                <div class="text-center p-6 rounded-xl bg-gray-50 hover:bg-secondary-50 hover:shadow-lg transition-all group">
                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-md group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-secondary-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-dark-text mb-2">Komunitas Solid</h3>
                    <p class="text-sm text-gray-600">Tumbuh bersama</p>
                </div>

                <div class="text-center p-6 rounded-xl bg-gray-50 hover:bg-primary-50 hover:shadow-lg transition-all group">
                    <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-md group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-dark-text mb-2">100% Gratis</h3>
                    <p class="text-sm text-gray-600">Selamanya</p>
                </div>
            </div>
        </div>
    </div>
</section>