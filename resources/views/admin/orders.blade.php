@extends('admin.layouts.app')

@section('title', 'Manajemen Order')

@section('content')
<div class="mb-8">
    <h1 class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white">Manajemen Order</h1>
    <p class="text-gray-600 dark:text-gray-400 mt-1">Kelola pesanan dan transaksi</p>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8">
    <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400">Total Order</p>
        <p class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white mt-1">1,256</p>
        <p class="text-xs sm:text-sm text-green-600 mt-1">+5.3% dari bulan lalu</p>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400">Pending</p>
        <p class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white mt-1">23</p>
        <p class="text-xs sm:text-sm text-yellow-600 mt-1">+1.2% dari bulan lalu</p>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400">Complete</p>
        <p class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white mt-1">1,189</p>
        <p class="text-xs sm:text-sm text-green-600 mt-1">+4.8% dari bulan lalu</p>
    </div>
    <div class="bg-white dark:bg-gray-800 rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <p class="text-xs sm:text-sm font-medium text-gray-600 dark:text-gray-400">Cancel</p>
        <p class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white mt-1">44</p>
        <p class="text-xs sm:text-sm text-red-600 mt-1">-2.1% dari bulan lalu</p>
    </div>
</div>

<!-- Orders Table -->
<div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
    <div class="p-4 sm:p-6 border-b border-gray-200 dark:border-gray-700">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between space-y-4 sm:space-y-0">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Daftar Order</h2>
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3">
                <select class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-xl px-4 py-2 text-sm w-full sm:w-auto">
                    <option>Status</option>
                    <option>Belum Dibayar</option>
                    <option>Dibayar</option>
                    <option>Dikirim</option>
                    <option>Selesai</option>
                    <option>Dibatalkan</option>
                </select>
                <input type="text" placeholder="Cari order..." class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-xl px-4 py-2 text-sm w-full sm:w-auto">
            </div>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 dark:bg-gray-900">
                <tr>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Order ID</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Customer</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Tanggal</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Total</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Status</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">#ORD-001</td>
                    <td class="px-4 sm:px-6 py-4">
                        <div>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">John Doe</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">john@example.com</p>
                        </div>
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">12 Okt 2023</td>
                    <td class="px-4 sm:px-6 py-4 text-sm font-semibold text-gray-900 dark:text-white">Rp 299,000</td>
                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Dibayar</span>
                    </td>
                    <td class="px-4 sm:px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 p-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                            <button class="text-green-600 hover:text-green-800 p-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">#ORD-002</td>
                    <td class="px-4 sm:px-6 py-4">
                        <div>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">Jane Smith</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">jane@example.com</p>
                        </div>
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">11 Okt 2023</td>
                    <td class="px-4 sm:px-6 py-4 text-sm font-semibold text-gray-900 dark:text-white">Rp 599,000</td>
                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full">Dikirim</span>
                    </td>
                    <td class="px-4 sm:px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 p-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                            <button class="text-green-600 hover:text-green-800 p-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">#ORD-003</td>
                    <td class="px-4 sm:px-6 py-4">
                        <div>
                            <p class="text-sm font-medium text-gray-900 dark:text-white">Mike Brown</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">mike@example.com</p>
                        </div>
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">10 Okt 2023</td>
                    <td class="px-4 sm:px-6 py-4 text-sm font-semibold text-gray-900 dark:text-white">Rp 449,000</td>
                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">Pending</span>
                    </td>
                    <td class="px-4 sm:px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 p-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                            <button class="text-green-600 hover:text-green-800 p-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
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