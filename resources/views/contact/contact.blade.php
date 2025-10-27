@extends('layouts.app')

@section('content')

{{-- Hero Contact Section --}}
<section class="bg-gradient-to-br from-primary-50 via-white to-secondary-50 py-20">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center space-y-6">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 rounded-full text-sm text-gray-700 font-semibold shadow-sm">
                <svg class="w-4 h-4 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                </svg>
                Hubungi Kami
            </div>
            
            <h1 class="text-4xl md:text-6xl font-bold text-dark-text leading-tight">
                Kami Siap Mendengar
                <span class="bg-gradient-to-r from-primary-600 to-secondary-600 bg-clip-text text-transparent">
                    <br>Dari Anda
                </span>
            </h1>
            
            <p class="text-xl text-gray-600 leading-relaxed">
                Punya pertanyaan, saran, atau testimoni? Kami senang mendengar dari Anda. 
                Tim kami akan merespons secepat mungkin.
            </p>
        </div>
    </div>
</section>

{{-- Contact Methods --}}
<section class="bg-white py-20">
    <div class="container">
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            {{-- Email Card --}}
            <div class="group text-center p-8 rounded-2xl bg-gradient-to-br from-white to-primary-50 border-2 border-primary-100 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 bg-primary-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-dark-text mb-3">Email Kami</h3>
                <a href="mailto:comdonate9@gmail.com" class="text-primary-600 font-semibold hover:underline">
                    comdonate9@gmail.com
                </a>
                <p class="text-gray-600 text-sm mt-2">
                    Respon dalam 24 jam
                </p>
            </div>

            {{-- WhatsApp Card --}}
            <div class="group text-center p-8 rounded-2xl bg-gradient-to-br from-white to-secondary-50 border-2 border-secondary-100 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 bg-secondary-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-dark-text mb-3">WhatsApp</h3>
                <a href="https://wa.me/62882019494158" class="text-secondary-600 font-semibold hover:underline">
                    +62 882-0194-0194158
                </a>
                <p class="text-gray-600 text-sm mt-2">
                    Chat langsung dengan kami
                </p>
            </div>

            {{-- Social Media Card --}}
            <div class="group text-center p-8 rounded-2xl bg-gradient-to-br from-white to-primary-50 border-2 border-primary-100 hover:shadow-xl transition-all duration-300">
                <div class="w-16 h-16 bg-primary-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
                        <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-dark-text mb-3">Media Sosial</h3>
                <div class="flex justify-center gap-3 mb-3">
                    <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-primary-100 rounded-lg flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-primary-100 rounded-lg flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                </div>
                <p class="text-gray-600 text-sm">
                    Ikuti update terbaru kami
                </p>
            </div>
        </div>

        {{-- Contact Form Section --}}
        <div class="grid lg:grid-cols-2 gap-12 items-start max-w-6xl mx-auto">
            {{-- Left Side - Info --}}
            <div class="space-y-8">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-dark-text mb-4">
                        Kirim Pesan Kepada Kami
                    </h2>
                    <p class="text-lg text-gray-600">
                        Isi formulir di samping dan kami akan segera menghubungi Anda kembali. 
                        Semua pesan dibaca dengan penuh perhatian dan kasih.
                    </p>
                </div>

                {{-- FAQ Quick Links (Dropdown Style) --}}
                <div class="bg-gradient-to-br from-gray-50 to-white p-6 rounded-xl border border-gray-200">
                    <h3 class="font-bold text-dark-text mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-primary-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                        </svg>
                        Pertanyaan Umum
                    </h3>
                    <div class="space-y-4">
                        {{-- FAQ 1 --}}
                        <details class="group">
                            <summary class="flex justify-between items-center font-medium text-gray-700 hover:text-primary-600 cursor-pointer list-none">
                                <span>Bagaimana cara mendaftar?</span>
                                <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </summary>
                            <p class="text-gray-600 mt-2 text-sm leading-relaxed pt-2 border-t border-gray-100">
                                Anda dapat mendaftar dengan mengklik tombol "Daftar" di pojok kanan atas halaman. Isi formulir dengan nama, email, dan password Anda, lalu klik "Buat Akun".
                            </p>
                        </details>
                        
                        {{-- FAQ 2 --}}
                        <details class="group">
                            <summary class="flex justify-between items-center font-medium text-gray-700 hover:text-primary-600 cursor-pointer list-none">
                                <span>Apakah benar-benar gratis?</span>
                                <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </summary>
                            <p class="text-gray-600 mt-2 text-sm leading-relaxed pt-2 border-t border-gray-100">
                                Ya, platform kami 100% gratis untuk semua pengguna. Kami didukung oleh donasi sukarela untuk menjalankan pelayanan ini.
                            </p>
                        </details>

                        {{-- FAQ 3 --}}
                        <details class="group">
                            <summary class="flex justify-between items-center font-medium text-gray-700 hover:text-primary-600 cursor-pointer list-none">
                                <span>Bagaimana cara bergabung dengan komunitas?</span>
                                <svg class="w-5 h-5 text-gray-400 group-open:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </summary>
                            <p class="text-gray-600 mt-2 text-sm leading-relaxed pt-2 border-t border-gray-100">
                                Setelah Anda mendaftar dan login, Anda dapat langsung mengakses menu "Komunitas" untuk mulai berdiskusi, berbagi renungan, dan mendoakan satu sama lain.
                            </p>
                        </details>
                    </div>
                </div>
                
                {{-- Jam Operasional Dihapus --}}

            </div>

            {{-- Right Side - Form --}}
            <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
                
                {{-- Form diubah untuk Web3Forms --}}
                <form action="https://api.web3forms.com/submit" method="POST" class="space-y-6">
                    
                    {{-- Ganti dengan Access Key Anda --}}
                    <input type="hidden" name="access_key" value="ff60ca3b-b266-4427-994c-35f56c0bcd0b">
                    {{-- Tambahkan subjek email (opsional namun disarankan) --}}
                    <input type="hidden" name="subject" value="Pesan Baru dari Formulir Kontak Website">
                    {{-- Hapus @csrf --}}
                    
                    {{-- Name --}}
                    <div>
                        <label for="name" class="block text-sm font-semibold text-dark-text mb-2">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all"
                            placeholder="John Doe"
                        >
                    </div>

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block text-sm font-semibold text-dark-text mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all"
                            placeholder="john@example.com"
                        >
                    </div>

                    {{-- Phone --}}
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-dark-text mb-2">
                            Nomor Telepon
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all"
                            placeholder="+62 812-3456-7890"
                        >
                    </div>

                    {{-- Subject --}}
                    <div>
                        <label for="subject_options" class="block text-sm font-semibold text-dark-text mb-2">
                            Subjek <span class="text-red-500">*</span>
                        </label>
                        <select 
                            id="subject_options" 
                            name="subject_options" 
                            required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all"
                        >
                            <option value="">Pilih Subjek</option>
                            <option value="general">Pertanyaan Umum</option>
                            <option value="technical">Bantuan Teknis</option>
                            <option value="partnership">Kerjasama</option>
                            <option value="testimony">Testimoni</option>
                            <option value="prayer">Permintaan Doa</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>

                    {{-- Message --}}
                    <div>
                        <label for="message" class="block text-sm font-semibold text-dark-text mb-2">
                            Pesan <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="5" 
                            required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all resize-none"
                            placeholder="Tulis pesan Anda di sini..."
                        ></textarea>
                    </div>

                    {{-- Privacy --}}
                    <div class="flex items-start gap-3">
                        <input 
                            type="checkbox" 
                            id="privacy" 
                            name="privacy" 
                            required
                            class="mt-1 w-4 h-4 text-primary-600 border-gray-300 rounded focus:ring-primary-500"
                        >
                        <label for="privacy" class="text-sm text-gray-600">
                            Saya setuju dengan <a href="#" class="text-primary-600 hover:underline">kebijakan privasi</a> 
                            dan memberikan izin untuk dihubungi kembali
                        </label>
                    </div>

                    {{-- Submit Button (Dirapikan) --}}
                    <button 
                        type="submit" 
                        class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-300 group"
                    >
                        Kirim Pesan
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- Map Section Dihapus dan diganti CTA --}}
@include('components.cta-section')

@endsection