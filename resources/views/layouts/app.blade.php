<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Renungan Harian')</title>

    {{-- 
      Kita tidak perlu memuat font Google di sini lagi.
      Vite + Tailwind akan mengurusnya berdasarkan @theme di app.css.
      (Pastikan kamu sudah install font-nya: npm install @fontsource/poppins)
      
      Jika belum, jalankan: npm install @fontsource/poppins
      Lalu tambahkan ini di paling atas resources/js/app.js:
      import '@fontsource/poppins/300.css';
      import '@fontsource/poppins/400.css';
      import '@fontsource/poppins/600.css';
      import '@fontsource/poppins/700.css';
    --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
{{-- Tambahkan kelas flex untuk layout sticky footer --}}
<body class="flex flex-col min-h-screen">
    
    <x-header />

    {{-- Tambahkan 'flex-grow' untuk mendorong footer ke bawah --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>