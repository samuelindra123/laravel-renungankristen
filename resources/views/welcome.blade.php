@extends('layouts.app')

@section('title', 'Selamat Datang di RenunganKristen')

@section('content')
    
    <x-hero />

    {{-- Bagian Fitur (Bonus) ditulis ulang dengan Tailwind --}}
    <section class="py-16">
        <div class="container">
            {{-- 
              - grid: Mengaktifkan CSS Grid
              - grid-cols-1: 1 kolom di mobile
              - md:grid-cols-3: 3 kolom di layar medium (desktop)
              - gap-8: Jarak antar item
            --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
              
    </section>

@endsection