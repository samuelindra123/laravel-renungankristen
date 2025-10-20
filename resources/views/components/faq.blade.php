{{-- FAQ Component --}}
<section class="bg-gradient-to-br from-gray-50 to-white py-20">
    <div class="container">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-dark-text mb-4">
                Pertanyaan Yang Sering Diajukan
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Temukan jawaban untuk pertanyaan umum tentang platform kami
            </p>
        </div>

        <div class="max-w-3xl mx-auto space-y-4">
            {{-- FAQ Item 1 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow" x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left">
                    <span class="font-semibold text-dark-text text-lg">Apakah platform ini benar-benar gratis?</span>
                    <svg class="w-6 h-6 text-primary-600 transform transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6">
                    <p class="text-gray-600 leading-relaxed">
                        Ya! Platform kami 100% gratis selamanya. Kami percaya bahwa firman Tuhan dan persekutuan tidak boleh dibatasi oleh biaya. 
                        Semua fitur dapat diakses tanpa perlu berlangganan atau pembayaran apapun.
                    </p>
                </div>
            </div>

            {{-- FAQ Item 2 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow" x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left">
                    <span class="font-semibold text-dark-text text-lg">Bagaimana cara mendaftar?</span>
                    <svg class="w-6 h-6 text-primary-600 transform transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6">
                    <p class="text-gray-600 leading-relaxed">
                        Pendaftaran sangat mudah! Klik tombol "Daftar", masukkan email dan password Anda, lalu verifikasi email. 
                        Seluruh proses hanya memakan waktu kurang dari 2 menit. Anda juga bisa mendaftar menggunakan akun Google atau Facebook.
                    </p>
                </div>
            </div>

            {{-- FAQ Item 3 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow" x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left">
                    <span class="font-semibold text-dark-text text-lg">Apa saja fitur yang tersedia?</span>
                    <svg class="w-6 h-6 text-primary-600 transform transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6">
                    <p class="text-gray-600 leading-relaxed mb-3">
                        Kami menyediakan berbagai fitur untuk menunjang pertumbuhan iman Anda:
                    </p>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Renungan harian yang inspiratif
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Komunitas untuk berbagi dan berdiskusi
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Permintaan doa dan sharing berkat
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-primary-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Alkitab digital dengan berbagai versi
                        </li>
                    </ul>
                </div>
            </div>

            {{-- FAQ Item 4 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow" x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left">
                    <span class="font-semibold text-dark-text text-lg">Apakah data saya aman?</span>
                    <svg class="w-6 h-6 text-primary-600 transform transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6">
                    <p class="text-gray-600 leading-relaxed">
                        Keamanan data Anda adalah prioritas kami. Kami menggunakan enkripsi SSL/TLS untuk semua komunikasi, 
                        menyimpan password dengan hashing yang aman, dan tidak pernah membagikan data pribadi Anda kepada pihak ketiga. 
                        Kami juga mematuhi standar keamanan data internasional.
                    </p>
                </div>
            </div>

            {{-- FAQ Item 5 --}}
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow" x-data="{ open: false }">
                <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left">
                    <span class="font-semibold text-dark-text text-lg">Bagaimana cara menghubungi support?</span>
                    <svg class="w-6 h-6 text-primary-600 transform transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-6 pb-6">
                    <p class="text-gray-600 leading-relaxed">
                        Anda dapat menghubungi kami melalui email di hello@renunganapp.com, WhatsApp di +62 812-3456-7890, 
                        atau mengisi formulir kontak di halaman Contact Us. Tim kami siap membantu Anda setiap hari Senin-Jumat (09:00-17:00 WIB).
                    </p>
                </div>
            </div>
        </div>

        {{-- Contact CTA --}}
        <div class="text-center mt-12">
            <p class="text-gray-600 mb-4">Masih punya pertanyaan?</p>
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

{{-- Alpine.js for accordion --}}
@push('scripts')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush