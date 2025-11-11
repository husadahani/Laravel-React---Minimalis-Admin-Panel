<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/admin/css/app.css')
</head>
<body class="h-full bg-gray-50 font-sans dark:bg-gray-900">
    <!-- Dark mode support -->
    <script>
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        }
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
            if (event.matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        });
    </script>

    <div class="flex h-full">
        <!-- Sidebar -->
        @include('admin.components.sidebar')
        
        <!-- Main Content -->
        <div class="flex-1 lg:ml-0">
            <!-- Header -->
            @include('admin.components.header')
            
            <!-- Page Content -->
            <main class="p-4 sm:p-6">
                @yield('content')
            </main>
        </div>
    </div>
    
    <!-- Include Alpine.js for dropdown functionality -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Include Lucide icons script -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script>
        // Initialize lucide icons
        lucide.createIcons();
    </script>
    
    @vite('resources/admin/js/app.js')
    @yield('scripts')
</body>
</html>