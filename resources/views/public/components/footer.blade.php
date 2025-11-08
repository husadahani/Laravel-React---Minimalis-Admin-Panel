<footer class="bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-2">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Website Kami</h3>
                <p class="text-gray-600 dark:text-gray-300">
                    Memberikan layanan terbaik untuk kebutuhan Anda. Kami berkomitmen untuk menyediakan produk dan layanan berkualitas tinggi.
                </p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Tautan</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Beranda</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Tentang</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Legal</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('privacy') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Kebijakan Privasi</a></li>
                    <li><a href="{{ route('terms') }}" class="text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Syarat & Ketentuan</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
            <p class="text-center text-gray-600 dark:text-gray-300 text-sm">
                &copy; {{ date('Y') }} Website Kami. Hak Cipta Dilindungi.
            </p>
        </div>
    </div>
</footer>