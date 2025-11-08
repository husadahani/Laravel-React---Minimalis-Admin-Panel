@extends('admin.layouts.app')

@section('title', 'System Logs')

@section('content')
<div class="mb-8">
    <h1 class="text-xl sm:text-2xl font-semibold text-gray-900 dark:text-white">System Logs</h1>
    <p class="text-gray-600 dark:text-gray-400 mt-1">Monitor error dan aktivitas sistem</p>
</div>

<!-- Logs Table -->
<div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50 dark:bg-gray-900">
                <tr>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Waktu</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Level</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Pesan</th>
                    <th class="px-4 sm:px-6 py-4 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">User</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">2024-01-20 10:30:15</td>
                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">ERROR</span>
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">Database connection timeout</td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">System</td>
                </tr>
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">2024-01-20 10:25:42</td>
                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">WARNING</span>
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">High memory usage detected</td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">System</td>
                </tr>
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">2024-01-20 10:20:18</td>
                    <td class="px-4 sm:px-6 py-4">
                        <span class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">INFO</span>
                    </td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">User login successful</td>
                    <td class="px-4 sm:px-6 py-4 text-sm text-gray-900 dark:text-white">john@example.com</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection