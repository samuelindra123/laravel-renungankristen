{{-- Testimonials Component --}}
<section class="bg-white py-20">
    <div class="container">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-dark-text mb-4">
                Apa Kata Mereka?
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Testimoni nyata dari pengguna yang telah merasakan dampak positif
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            {{-- Testimonial Card 1 --}}
            <div class="bg-gradient-to-br from-white to-primary-50 p-8 rounded-2xl border border-primary-100 shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex items-center gap-1 mb-4">
                    @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-gray-700 mb-6 leading-relaxed italic">
                    "Platform ini benar-benar membantu saya untuk lebih dekat dengan Tuhan. Renungan hariannya selalu tepat waktu dan menyentuh hati."
                </p>
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/user-1.jpg') }}" alt="User" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <p class="font-semibold text-dark-text">Sarah Johnson</p>
                        <p class="text-sm text-gray-600">Jakarta</p>
                    </div>
                </div>
            </div>

            {{-- Testimonial Card 2 --}}
            <div class="bg-gradient-to-br from-white to-secondary-50 p-8 rounded-2xl border border-secondary-100 shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex items-center gap-1 mb-4">
                    @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-gray-700 mb-6 leading-relaxed italic">
                    "Komunitas yang sangat supportif! Saya merasa memiliki keluarga baru yang selalu mendoakan dan menguatkan."
                </p>
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/user-2.jpg') }}" alt="User" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <p class="font-semibold text-dark-text">Michael Chen</p>
                        <p class="text-sm text-gray-600">Surabaya</p>
                    </div>
                </div>
            </div>

            {{-- Testimonial Card 3 --}}
            <div class="bg-gradient-to-br from-white to-primary-50 p-8 rounded-2xl border border-primary-100 shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex items-center gap-1 mb-4">
                    @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-gray-700 mb-6 leading-relaxed italic">
                    "Fitur-fiturnya lengkap dan mudah digunakan. Saya bisa sharing renungan, minta doa, dan baca Alkitab dalam satu app!"
                </p>
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/user-3.jpg') }}" alt="User" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <p class="font-semibold text-dark-text">Grace Wijaya</p>
                        <p class="text-sm text-gray-600">Bandung</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- View More --}}
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center text-primary-600 font-semibold hover:underline group">
                Lihat Semua Testimoni
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>