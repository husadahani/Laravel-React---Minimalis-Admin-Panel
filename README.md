# LAVA - Laravel E-Commerce Platform

![Laravel](https://img.shields.io/badge/Laravel-9.19-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.4-38BDF8?style=for-the-badge&logo=tailwindcss&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-7.2-646CFF?style=for-the-badge&logo=vite&logoColor=white)

LAVA adalah platform e-commerce modern yang dibangun dengan Laravel 9, menawarkan antarmuka publik dan panel admin yang lengkap dengan fitur-fitur canggih.

## 📋 Tentang Project

LAVA adalah sistem e-commerce yang dirancang untuk memberikan pengalaman berbelanja yang optimal bagi pelanggan dan manajemen yang mudah bagi admin. Platform ini menggunakan teknologi modern dan arsitektur yang scalable.

### 🛠️ Teknologi Stack

- **Backend**: Laravel 9.19 (PHP 8.0+)
- **Frontend**: Vite 7.2.2, TailwindCSS 3.4.18
- **Database**: MySQL
- **Authentication**: Laravel Sanctum untuk API tokens
- **Build Tools**: Laravel Vite Plugin, PostCSS, Autoprefixer

### 🏗️ Struktur Project

```
lava/
├── app/                     # Aplikasi utama
│   ├── Http/               # Controllers, middleware, routes
│   ├── Models/             # Model Eloquent
│   └── Services/           # Services dan business logic
├── config/                 # Konfigurasi aplikasi
├── database/              # Migrations, factories, seeders
├── public/                # File publik (assets compile)
├── resources/             # Views, CSS, JavaScript
│   ├── views/             # Template Blade
│   │   ├── public/        # Template frontend
│   │   └── admin/         # Template admin
│   └── js/                # File JavaScript
├── routes/                # Definisi routes
├── storage/               # File storage
└── tests/                 # PHPUnit tests
```

## ✨ Fitur Utama

### 🌐 Frontend (Website Public)

- **Halaman Depan** - Welcome page dengan hero section dan fitur unggulan
- **Tentang Kami** - Informasi perusahaan dan cerita
- **Kontak** - Form kontak untuk pelanggan
- **Kebijakan Privasi** - Kebijakan privasi pengguna
- **Syarat & Ketentuan** - Ketentuan layanan
- **Desain Responsif** - Tampilan optimal di semua perangkat

### 🏢 Panel Admin

- **Dashboard** - Ringkasan performa bisnis
- **Produk** - Manajemen produk (CRUD)
- **Orders** - Tracking dan manajemen pesanan
- **Users** - Manajemen pengguna
- **Blog** - Manajemen konten blog
- **Marketing** - Alat pemasaran dan promosi
- **Logs** - Log sistem dan aktivitas
- **Settings** - Konfigurasi umum
- **Site Settings** - Pengaturan situs
- **SMTP** - Konfigurasi email

### 🔐 Sistem Keamanan

- **Dual Authentication Guards** - Terpisah untuk admin dan pengguna publik
- **Admin Authentication** - Sistem login admin custom
- **CSRF Protection** - Proteksi CSRF aktif
- **Input Validation** - Validasi dan sanitasi input
- **Secure Sessions** - Manajemen session yang aman

### 🚀 Development Tools

- **Vite** - Build tool modern dengan hot reload
- **TailwindCSS** - Framework CSS utility-first
- **Laravel Vite Plugin** - Integrasi Laravel dengan Vite
- **PostCSS & Autoprefixer** - Processing CSS modern

## 🚀 Cara Development

### Prasyarat

- PHP 8.0.2 atau lebih tinggi
- MySQL 5.7+
- Node.js 16+ (untuk Vite)
- Composer 2.0+

### Instalasi

1. **Clone Repository**
```bash
git clone https://github.com/your-username/lava.git
cd lava
```

2. **Instalasi PHP Dependencies**
```bash
composer install
```

3. **Instalasi JavaScript Dependencies**
```bash
npm install
```

4. **Konfigurasi Environment**
```bash
cp .env.example .env
```
Edit `.env` file dengan konfigurasi database:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=app_lava
DB_USERNAME=app_lava
DB_PASSWORD=
```

5. **Generate Application Key**
```bash
php artisan key:generate
```

6. **Run Migrations**
```bash
php artisan migrate
```

7. **Build Assets**
```bash
# Development (dengan hot reload)
npm run dev

# Production
npm run build
```

8. **Start Laravel Server**
```bash
php artisan serve
```

### Development Commands

```bash
# Development server dengan hot reload
npm run dev

# Build production
npm run build

# Laravel development server
php artisan serve

# List semua routes
php artisan route:list

# Database migrations
php artisan migrate

# Database rollback
php artisan migrate:rollback

# Clear cache
php artisan cache:clear
php artisan config:clear
```

### Access Application

- **Frontend**: http://localhost:8000
- **Admin Login**: http://localhost:8000/admin/login
- **Admin Dashboard**: http://localhost:8000/admin

## 📊 Database

### Tabel Utama

- `users` - Pengguna publik
- `admins` - Admin users
- `products` - Produk e-commerce
- `orders` - Pesanan pelanggan
- `order_items` - Item pesanan
- `blogs` - Konten blog
- `categories` - Kategori produk
- `personal_access_tokens` - API tokens
- `password_resets` - Reset password

### Database Setup

```bash
# Create database
mysql -u root -p -e "CREATE DATABASE app_lava;"

# Run migrations
php artisan migrate

# Optional: Run seeders
php artisan db:seed
```

## 🔧 Konfigurasi

### Environment Variables

Pastikan file `.env` mengandung:

```
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=app_lava
DB_USERNAME=app_lava
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### Vite Configuration

File `vite.config.js` dikonfigurasi dengan:

- Entry points untuk public, admin, dan login
- TailwindCSS integration
- Path aliases untuk import yang bersih
- Hot module replacement

## 🧪 Testing

```bash
# Run PHP tests
php artisan test

# Run JavaScript tests
npm run test

# Run tests with coverage
php artisan test --coverage
```

## 📁 File Penting

### Routes

- `routes/web.php` - Public routes
- `routes/admin.php` - Admin routes
- `routes/api.php` - API routes

### Controllers

- `app/Http/Controllers/PublicController.php` - Frontend controller
- `app/Http/Controllers/AdminController.php` - Admin controller
- `app/Http/Controllers/Auth/` - Authentication controllers

### Views

- `resources/views/public/` - Frontend templates
- `resources/views/admin/` - Admin templates
- `resources/views/layouts/` - Layout templates

## 🔒 Security Best Practices

1. **Update dependencies** secara teratur
2. **Gunakan environment variables** untuk sensitive data
3. **Enable HTTPS** di production
4. **Regular backups** database
5. **Monitor logs** untuk aktivitas mencurigakan
6. **Implement rate limiting** untuk API endpoints

## 🤝 Contributing

1. Fork repository
2. Create feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open Pull Request

---

Built with ❤️ using Laravel
