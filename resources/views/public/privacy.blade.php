@extends('public.layouts.app')

@section('title', 'Kebijakan Privasi')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="text-center">
        <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white sm:text-4xl">
            Kebijakan Privasi
        </h1>
        <p class="mt-4 text-xl text-gray-500 dark:text-gray-300">
            Perlindungan data pribadi Anda adalah prioritas kami
        </p>
    </div>

    <div class="mt-12 space-y-8">
        <section>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">1. Informasi yang Kami Kumpulkan</h2>
            <p class="text-gray-600 dark:text-gray-300">
                Kami mengumpulkan informasi yang Anda berikan secara sukarela ketika menggunakan layanan kami, 
                termasuk namun tidak terbatas pada nama, alamat email, nomor telepon, dan informasi kontak lainnya.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">2. Cara Kami Menggunakan Informasi</h2>
            <p class="text-gray-600 dark:text-gray-300">
                Informasi yang kami kumpulkan digunakan untuk berbagai tujuan, antara lain:
            </p>
            <ul class="mt-4 space-y-2 list-disc list-inside text-gray-600 dark:text-gray-300">
                <li>Menyediakan dan memelihara layanan kami</li>
                <li>Memberikan bantuan pelanggan yang lebih baik</li>
                <li>Menghubungi Anda dengan informasi yang relevan</li>
                <li>Meningkatkan kualitas layanan kami</li>
                <li>Melakukan analisis statistik untuk pengembangan</li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">3. Perlindungan Informasi</h2>
            <p class="text-gray-600 dark:text-gray-300">
                Kami mengambil langkah-langkah keamanan yang wajar dan sesuai untuk melindungi informasi pribadi 
                Anda dari akses tidak sah, pengungkapan, penggunaan, atau perubahan yang tidak sah. Namun, 
                tidak ada metode transmisi data atau penyimpanan elektronik yang 100% aman.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">4. Penyimpanan Data</h2>
            <p class="text-gray-600 dark:text-gray-300">
                Kami menyimpan informasi pribadi Anda selama diperlukan untuk tujuan yang ditentukan dalam 
                kebijakan ini, kecuali diperlukan lebih lama berdasarkan kewajiban hukum atau kontraktual.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">5. Pembagian Informasi</h2>
            <p class="text-gray-600 dark:text-gray-300">
                Kami tidak akan membagikan, menjual, menyewakan, atau mentransfer informasi pribadi Anda 
                kepada pihak ketiga tanpa persetujuan eksplisit dari Anda, kecuali sebagaimana diatur 
                dalam kebijakan privasi ini atau diwajibkan oleh hukum.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">6. Cookie</h2>
            <p class="text-gray-600 dark:text-gray-300">
                Kami menggunakan cookie dan teknologi pelacakan serupa untuk meningkatkan pengalaman pengguna 
                dan menganalisis penggunaan layanan kami. Anda dapat mengatur preferensi cookie Anda 
                melalui pengaturan browser Anda.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">7. Hak Anda</h2>
            <p class="text-gray-600 dark:text-gray-300">
                Anda memiliki hak untuk mengakses, memperbarui, mengoreksi, atau menghapus informasi pribadi 
                Anda yang kami simpan. Anda juga dapat menarik persetujuan pengumpulan dan penggunaan data kapan saja.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">8. Tautan ke Situs Lain</h2>
            <p class="text-gray-600 dark:text-gray-300">
                Situs web kami dapat berisi tautan ke situs web pihak ketiga yang tidak dioperasikan oleh kami. 
                Kami tidak bertanggung jawab atas praktik privasi atau konten dari situs tersebut.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">9. Perubahan Kebijakan Privasi</h2>
            <p class="text-gray-600 dark:text-gray-300">
                Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu. Setiap perubahan akan 
                dipublikasikan di halaman ini dan tanggal revisi akan diperbarui.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">10. Hubungi Kami</h2>
            <p class="text-gray-600 dark:text-gray-300">
                Jika Anda memiliki pertanyaan tentang kebijakan privasi ini, silakan hubungi kami melalui 
                informasi kontak yang tersedia di situs web kami.
            </p>
        </section>
    </div>
</div>
@endsection