<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Tersesat?</title>
    
    {{-- Memuat CSS kita yang sekarang berisi Tailwind + style kustom --}}
    @vite(['resources/css/app.css'])
    
    {{-- 
      Kita tidak perlu style inline lagi, kita bisa pakai kelas Tailwind di body.
      Kita juga tidak perlu memuat font, karena app.css sudah mengurusnya.
    --}}

</head>
{{-- 
  Gunakan kelas utilitas Tailwind untuk menata halaman 404.
  - bg-gray-100: Latar belakang abu-abu muda
  - flex, flex-col, justify-center, items-center, min-h-screen: Rata tengah vertikal & horizontal
--}}
<body class="bg-gray-100 flex flex-col justify-center items-center min-h-screen text-center p-4">

    <h1 class="text-9xl font-bold text-gray-300">404</h1>
    <h2 class="text-3xl font-semibold text-gray-800 mt-0 mb-4">Halaman Tidak Ditemukan</h2>
    <p class="text-lg text-gray-600 mb-8 max-w-md">
        Maaf, sepertinya halaman yang Anda cari sedang dalam perjalanan spiritualnya sendiri.
    </p>
    
    {{-- Kita bisa gunakan kelas .btn kita di sini! --}}
    <a href="/" class="btn btn-primary">Kembali ke Rumah</a>
    
</body>
</html>