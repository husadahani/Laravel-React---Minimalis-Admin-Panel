@extends('admin.layouts.app')

@section('title', 'Email Marketing')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Email Marketing</h1>
    <p class="text-gray-600 dark:text-gray-400 mt-1">Kirim email promosi ke pelanggan</p>
</div>

<div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 p-6">
    <form class="space-y-6">
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Subject Email</label>
            <input type="text" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-base" placeholder="Masukkan subject email...">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Target Audience</label>
            <select class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-base">
                <option>Semua User</option>
                <option>User Aktif</option>
                <option>User Premium</option>
                <option>User Baru</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Konten Email</label>
            <textarea rows="8" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-base" placeholder="Tulis konten email promosi..."></textarea>
        </div>

        <div class="flex items-center space-x-4">
            <button type="button" class="bg-primary-600 hover:bg-primary-700 text-white px-6 py-3 rounded-xl font-medium transition-all duration-200">
                Kirim Email
            </button>
            <button type="button" class="bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300 px-6 py-3 rounded-xl font-medium transition-all duration-200">
                Preview
            </button>
        </div>
    </form>
</div>
@endsection