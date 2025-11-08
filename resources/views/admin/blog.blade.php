@extends('admin.layouts.app')

@section('title', 'Manajemen Blog')

@section('content')
<div class="flex flex-col sm:flex-row sm:items-center justify-between mb-8 space-y-4 sm:space-y-0">
    <div>
        <h1 class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white">Manajemen Blog</h1>
        <p class="text-gray-600 dark:text-gray-400 mt-1">Kelola artikel dan konten blog</p>
    </div>
    <button class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2.5 rounded-xl font-medium transition-all duration-200 flex items-center justify-center space-x-2 w-full sm:w-auto">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
        </svg>
        <span>Tambah Artikel</span>
    </button>
</div>

<!-- Blog Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-md transition-all duration-300">
        <div class="h-48 bg-gradient-to-r from-blue-500 to-purple-600"></div>
        <div class="p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Tips Optimasi Website</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Panduan lengkap untuk mengoptimalkan performa website Anda...</p>
            <div class="flex items-center justify-between">
                <span class="text-xs text-gray-500">3 hari lalu</span>
                <div class="flex items-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden hover:shadow-md transition-all duration-300">
        <div class="h-48 bg-gradient-to-r from-green-500 to-teal-600"></div>
        <div class="p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Panduan SEO Terbaru</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Update algoritma Google dan strategi SEO yang efektif...</p>
            <div class="flex items-center justify-between">
                <span class="text-xs text-gray-500">1 minggu lalu</span>
                <div class="flex items-center space-x-2">
                    <button class="text-blue-600 hover:text-blue-800 p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                    </button>
                    <button class="text-red-600 hover:text-red-800 p-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection