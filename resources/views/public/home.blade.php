@extends('public.layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Hero Section -->
    <div class="text-center py-12 sm:py-20">
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white sm:text-5xl sm:tracking-tight lg:text-6xl">
            Selamat Datang di Website Kami
        </h1>
        <p class="mt-6 max-w-lg mx-auto text-xl text-gray-500 dark:text-gray-300">
            Temukan layanan terbaik yang kami sediakan untuk memenuhi kebutuhan Anda.
        </p>
        <div class="mt-10">
            <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Hubungi Kami
            </a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="mt-4 text-lg font-medium text-gray-900 dark:text-white">Cepat & Efisien</h3>
                <p class="mt-2 text-gray-500 dark:text-gray-300">
                    Kami menyediakan layanan yang cepat dan efisien untuk memenuhi kebutuhan Anda dengan waktu yang singkat.
                </p>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="mt-4 text-lg font-medium text-gray-900 dark:text-white">Aman & Terpercaya</h3>
                <p class="mt-2 text-gray-500 dark:text-gray-300">
                    Keamanan dan kepercayaan pelanggan adalah prioritas utama kami dalam setiap layanan yang kami berikan.
                </p>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h3 class="mt-4 text-lg font-medium text-gray-900 dark:text-white">Penuh Perhatian</h3>
                <p class="mt-2 text-gray-500 dark:text-gray-300">
                    Kami memberikan layanan dengan penuh perhatian dan dedikasi untuk memastikan kepuasan pelanggan.
                </p>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="bg-indigo-700 rounded-lg py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                Siap untuk memulai?
            </h2>
            <p class="mt-4 text-lg text-indigo-100">
                Bergabunglah dengan ribuan pelanggan yang telah menggunakan layanan kami dan rasakan manfaatnya.
            </p>
            <div class="mt-8">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50">
                    Hubungi Kami Sekarang
                </a>
            </div>
        </div>
    </div>
</div>
@endsection