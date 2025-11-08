@extends('admin.layouts.app')

@section('title', 'Manajemen User')

@section('content')
<div class="mb-8">
    <h1 class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white">Manajemen User</h1>
    <p class="text-gray-600 dark:text-gray-400 mt-1">Kelola pengguna dan akun</p>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
    <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400">Total User</p>
        <p class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white mt-1">1,256</p>
        <p class="text-xs sm:text-sm text-green-600 mt-1">+5.3% dari bulan lalu</p>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400">Premium</p>
        <p class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white mt-1">124</p>
        <p class="text-xs sm:text-sm text-blue-600 mt-1">+12.4% dari bulan lalu</p>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400">Aktif</p>
        <p class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white mt-1">1,189</p>
        <p class="text-xs sm:text-sm text-green-600 mt-1">+4.8% dari bulan lalu</p>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400">Baru</p>
        <p class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white mt-1">142</p>
        <p class="text-xs sm:text-sm text-purple-600 mt-1">+8.2% dari bulan lalu</p>
    </div>
</div>

<!-- Users Table -->
<div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
    <div class="p-4 sm:p-6 border-b border-gray-200 dark:border-gray-700">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between space-y-4 sm:space-y-0">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Daftar User</h2>
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3">
                <select class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-xl px-4 py-2 text-sm w-full sm:w-auto">
                    <option>Semua Role</option>
                    <option>Administrator</option>
                    <option>Editor</option>
                    <option>Author</option>
                    <option>Subscriber</option>
                </select>
                <input type="text" placeholder="Cari user..." class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-xl px-4 py-2 text-sm w-full sm:w-auto">
            </div>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 dark:bg-gray-900">
                <tr>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">User</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Email</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Role</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Status</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Terakhir Login</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                    <td class="px-4 sm:px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-blue-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs sm:text-sm font-semibold">JD</span>
                            </div>
                            <div class="ml-3 sm:ml-4">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">John Doe</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">Admin</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">john@example.com</td>
                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium bg-purple-100 text-purple-800 rounded-full">Administrator</span>
                    </td>
                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Aktif</span>
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">12 Okt 2023, 14:30</td>
                    <td class="px-4 sm:px-6 py-4">
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
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                    <td class="px-4 sm:px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-green-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs sm:text-sm font-semibold">JS</span>
                            </div>
                            <div class="ml-3 sm:ml-4">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">Jane Smith</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">Editor</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">jane@example.com</td>
                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full">Editor</span>
                    </td>
                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Aktif</span>
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">11 Okt 2023, 09:15</td>
                    <td class="px-4 sm:px-6 py-4">
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
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                    <td class="px-4 sm:px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 sm:w-10 sm:h-10 bg-purple-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs sm:text-sm font-semibold">MB</span>
                            </div>
                            <div class="ml-3 sm:ml-4">
                                <p class="text-sm font-medium text-gray-900 dark:text-white">Mike Brown</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">Author</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">mike@example.com</td>
                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Author</span>
                    </td>
                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">Tidak Aktif</span>
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">10 Okt 2023, 16:45</td>
                    <td class="px-4 sm:px-6 py-4">
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
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="p-4 border-t border-gray-200 dark:border-gray-700">
        <div class="flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0">
            <div class="text-sm text-gray-600 dark:text-gray-400">
                Menampilkan 1-3 dari 125 data
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-1 rounded-lg border border-gray-300 dark:border-gray-700 text-sm">Sebelumnya</button>
                <button class="px-3 py-1 rounded-lg bg-primary-600 text-white text-sm">1</button>
                <button class="px-3 py-1 rounded-lg border border-gray-300 dark:border-gray-700 text-sm">2</button>
                <button class="px-3 py-1 rounded-lg border border-gray-300 dark:border-gray-700 text-sm">3</button>
                <button class="px-3 py-1 rounded-lg border border-gray-300 dark:border-gray-700 text-sm">Berikutnya</button>
            </div>
        </div>
    </div>
</div>
@endsection