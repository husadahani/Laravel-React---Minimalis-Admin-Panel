@extends('public.layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center">
        <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
            Tentang Kami
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500 dark:text-gray-300">
            Pelajari lebih lanjut tentang sejarah, visi, dan misi kami
        </p>
    </div>

    <div class="mt-16">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Sejarah Kami</h2>
                <p class="text-gray-600 dark:text-gray-300">
                    Kami memulai perjalanan pada tahun 2020 dengan visi untuk memberikan layanan terbaik kepada pelanggan. 
                    Dengan dedikasi dan kerja keras, kami telah berkembang menjadi salah satu penyedia layanan terkemuka di bidang kami.
                </p>
                <p class="mt-4 text-gray-600 dark:text-gray-300">
                    Dari hari pertama berdiri, kami selalu berkomitmen untuk memberikan kualitas terbaik dalam setiap layanan 
                    yang kami berikan. Kepercayaan pelanggan adalah fondasi utama dalam pertumbuhan kami.
                </p>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Nilai Kami</h2>
                <ul class="mt-4 space-y-3">
                    <li class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-5 w-5 rounded-full bg-indigo-500 text-white">
                                <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <p class="ml-3 text-gray-600 dark:text-gray-300">Integritas dalam setiap tindakan kami</p>
                    </li>
                    <li class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-5 w-5 rounded-full bg-indigo-500 text-white">
                                <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <p class="ml-3 text-gray-600 dark:text-gray-300">Komitmen terhadap kualitas</p>
                    </li>
                    <li class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-5 w-5 rounded-full bg-indigo-500 text-white">
                                <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <p class="ml-3 text-gray-600 dark:text-gray-300">Inovasi berkelanjutan</p>
                    </li>
                    <li class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-5 w-5 rounded-full bg-indigo-500 text-white">
                                <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                        </div>
                        <p class="ml-3 text-gray-600 dark:text-gray-300">Kepuasan pelanggan adalah prioritas</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mt-16">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-8">Visi & Misi</h2>
        <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-indigo-600 dark:text-indigo-400 mb-4">Visi</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Menjadi perusahaan terkemuka yang memberikan solusi terbaik dalam bidang kami, 
                        dengan fokus pada inovasi, kualitas, dan kepuasan pelanggan.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-indigo-600 dark:text-indigo-400 mb-4">Misi</h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Memberikan layanan berkualitas tinggi yang melebihi ekspektasi pelanggan, 
                        mengembangkan teknologi terbaru, dan menciptakan nilai bersama untuk semua stakeholder.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection