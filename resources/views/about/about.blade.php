@extends('layouts.app')

@section('content')

{{-- Hero About Section --}}
<section class="bg-white py-20 lg:py-32">
    <div class="container">
        <div class="max-w-4xl mx-auto text-center space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-primary-50 border border-primary-200 rounded-full text-sm text-primary-700 font-semibold">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                Tentang Kami
            </div>
            
            <h1 class="text-4xl md:text-6xl font-bold text-dark-text leading-tight">
                Membangun Komunitas Iman
                <span class="bg-gradient-to-r from-primary-600 to-secondary-600 bg-clip-text text-transparent">
                    <br>Yang Saling Menguatkan
                </span>
            </h1>
            
            <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                Platform digital yang menghubungkan orang-orang percaya untuk saling berbagi berkat, 
                renungan, dan tumbuh bersama dalam perjalanan iman.
            </p>
        </div>
    </div>
</section>

{{-- Our Story Section --}}
<section class="bg-gradient-to-br from-primary-50 via-white to-secondary-50 py-20">
    <div class="container">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            {{-- Image Side --}}
            <div class="relative">
                <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/about-story.jpg') }}" alt="Our Story" class="w-full h-auto">
                </div>
                
                {{-- Floating Card --}}
                <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-xl shadow-xl max-w-xs animate-float">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center">
                            <svg class="w-8 h-8 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-primary-600">15K+</p>
                            <p class="text-sm text-gray-600">Anggota Aktif</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Content Side --}}
            <div class="space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold text-dark-text">
                    Cerita Kami Dimulai dari Kerinduan Sederhana
                </h2>
                
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>
                        Pada tahun 2020, di tengah pandemi global, kami melihat banyak orang Kristen 
                        yang merindukan persekutuan dan penguatan iman yang lebih dalam. Dari situlah 
                        lahir visi untuk menciptakan platform digital yang menghubungkan hati.
                    </p>
                    
                    <p>
                        Kami percaya bahwa teknologi bukan untuk menggantikan persekutuan fisik, 
                        tetapi untuk memperluas jangkauan kasih Kristus. Setiap fitur dirancang dengan 
                        doa dan harapan agar setiap pengguna dapat merasakan hadirat Tuhan.
                    </p>
                    
                    <p class="text-primary-600 font-semibold italic">
                        "Sebab di mana dua atau tiga orang berkumpul dalam nama-Ku, 
                        di situ Aku ada di tengah-tengah mereka." - Matius 18:20
                    </p>
                </div>

                <div class="flex flex-wrap gap-4 pt-4">
                    <div class="flex items-center gap-2 text-gray-700">
                        <svg class="w-5 h-5 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Berbasis Alkitab</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-700">
                        <svg class="w-5 h-5 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Komunitas Positif</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-700">
                        <svg class="w-5 h-5 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>100% Gratis</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Values Section --}}
<section class="bg-white py-20">
    <div class="container">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-dark-text mb-4">
                Nilai-Nilai Yang Kami Pegang
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Fondasi yang menuntun setiap keputusan dan inovasi kami
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Value Card 1 --}}
            <div class="group text-center p-8 rounded-2xl bg-white border-2 border-gray-100 hover:border-primary-200 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-100 to-primary-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-dark-text mb-3">Kasih</h3>
                <p class="text-gray-600">
                    Mengasihi sesama seperti Kristus mengasihi kita
                </p>
            </div>

            {{-- Value Card 2 --}}
            <div class="group text-center p-8 rounded-2xl bg-white border-2 border-gray-100 hover:border-secondary-200 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-secondary-100 to-secondary-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-secondary-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-dark-text mb-3">Kebenaran</h3>
                <p class="text-gray-600">
                    Berpegang pada Firman Tuhan sebagai fondasi
                </p>
            </div>

            {{-- Value Card 3 --}}
            <div class="group text-center p-8 rounded-2xl bg-white border-2 border-gray-100 hover:border-primary-200 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-100 to-primary-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-dark-text mb-3">Komunitas</h3>
                <p class="text-gray-600">
                    Tumbuh bersama dalam tubuh Kristus
                </p>
            </div>

            {{-- Value Card 4 --}}
            <div class="group text-center p-8 rounded-2xl bg-white border-2 border-gray-100 hover:border-secondary-200 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-secondary-100 to-secondary-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-8 h-8 text-secondary-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-dark-text mb-3">Inovasi</h3>
                <p class="text-gray-600">
                    Teknologi untuk kemuliaan Tuhan
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Team Section --}}
<section class="bg-gradient-to-br from-gray-50 to-white py-20">
    <div class="container">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-dark-text mb-4">
                Tim Kami
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Dipercayakan untuk melayani dan membangun komunitas iman
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            {{-- Team Member 1 --}}
            <div class="group text-center">
                <div class="relative mb-6 mx-auto w-48 h-48">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-400 to-secondary-400 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-transform"></div>
                    <img src="{{ asset('images/team-1.jpg') }}" alt="Team Member" class="relative w-full h-full object-cover rounded-2xl">
                </div>
                <h3 class="text-xl font-bold text-dark-text mb-1">John Doe</h3>
                <p class="text-primary-600 font-semibold mb-3">Founder & Lead Pastor</p>
                <p class="text-gray-600 text-sm mb-4">
                    Melayani selama 15+ tahun dalam pelayanan digital
                </p>
                <div class="flex justify-center gap-3">
                    <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-primary-100 rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-primary-100 rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Team Member 2 --}}
            <div class="group text-center">
                <div class="relative mb-6 mx-auto w-48 h-48">
                    <div class="absolute inset-0 bg-gradient-to-br from-secondary-400 to-primary-400 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-transform"></div>
                    <img src="{{ asset('images/team-2.jpg') }}" alt="Team Member" class="relative w-full h-full object-cover rounded-2xl">
                </div>
                <h3 class="text-xl font-bold text-dark-text mb-1">Jane Smith</h3>
                <p class="text-secondary-600 font-semibold mb-3">Community Manager</p>
                <p class="text-gray-600 text-sm mb-4">
                    Membangun relasi yang bermakna dalam komunitas
                </p>
                <div class="flex justify-center gap-3">
                    <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-secondary-100 rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-secondary-100 rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Team Member 3 --}}
            <div class="group text-center">
                <div class="relative mb-6 mx-auto w-48 h-48">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary-400 to-secondary-400 rounded-2xl transform rotate-6 group-hover:rotate-12 transition-transform"></div>
                    <img src="{{ asset('images/team-3.jpg') }}" alt="Team Member" class="relative w-full h-full object-cover rounded-2xl">
                </div>
                <h3 class="text-xl font-bold text-dark-text mb-1">David Lee</h3>
                <p class="text-primary-600 font-semibold mb-3">Content Creator</p>
                <p class="text-gray-600 text-sm mb-4">
                    Menulis renungan yang menginspirasi setiap hari
                </p>
                <div class="flex justify-center gap-3">
                    <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-primary-100 rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-primary-100 rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Impact Stats --}}
<section class="bg-gradient-to-r from-primary-600 to-secondary-600 py-20 text-white">
    <div class="container">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Dampak Bersama Yang Kita Ciptakan
            </h2>
            <p class="text-xl text-primary-100">
                Angka-angka yang merepresentasikan kasih dan kepedulian
            </p>
        </div>

        <div class="grid md:grid-cols-4 gap-8 max-w-5xl mx-auto">
            <div class="text-center">
                <div class="text-5xl font-bold mb-2">15K+</div>
                <div class="text-primary-100">Anggota Aktif</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold mb-2">850+</div>
                <div class="text-primary-100">Renungan Harian</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold mb-2">50K+</div>
                <div class="text-primary-100">Doa Bersama</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold mb-2">120+</div>
                <div class="text-primary-100">Gereja Mitra</div>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
@include('components.cta-section')

@endsection