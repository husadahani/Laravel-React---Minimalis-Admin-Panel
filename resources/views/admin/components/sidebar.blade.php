<div id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-white dark:bg-gray-900 shadow-xl transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-between h-16 px-6 border-b border-gray-200 dark:border-gray-700">
        <div class="flex items-center space-x-3">
            <div class="w-8 h-8 bg-primary-500 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
            </div>
            <span class="text-xl font-semibold text-gray-900 dark:text-white">AdminPro</span>
        </div>
        <button id="closeSidebar" class="lg:hidden text-gray-500 hover:text-gray-700">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <nav class="px-4 py-6 sidebar-scrollbar overflow-y-auto h-full" style="height: calc(100% - 4rem);">
        <div class="space-y-2">
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-primary-600 bg-primary-50 dark:text-primary-400 dark:bg-primary-900/20' : 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
            </a>
            <a href="{{ route('admin.products') }}" class="{{ request()->routeIs('admin.products') ? 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-primary-600 bg-primary-50 dark:text-primary-400 dark:bg-primary-900/20' : 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                </svg>
                Produk
            </a>
            <a href="{{ route('admin.orders') }}" class="{{ request()->routeIs('admin.orders') ? 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-primary-600 bg-primary-50 dark:text-primary-400 dark:bg-primary-900/20' : 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                Order
            </a>
            <a href="{{ route('admin.users') }}" class="{{ request()->routeIs('admin.users') ? 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-primary-600 bg-primary-50 dark:text-primary-400 dark:bg-primary-900/20' : 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                User
            </a>
            <a href="{{ route('admin.blog') }}" class="{{ request()->routeIs('admin.blog') ? 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-primary-600 bg-primary-50 dark:text-primary-400 dark:bg-primary-900/20' : 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                Blog
            </a>
            <a href="{{ route('admin.marketing') }}" class="{{ request()->routeIs('admin.marketing') ? 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-primary-600 bg-primary-50 dark:text-primary-400 dark:bg-primary-900/20' : 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Marketing
            </a>
            <a href="{{ route('admin.logs') }}" class="{{ request()->routeIs('admin.logs') ? 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-primary-600 bg-primary-50 dark:text-primary-400 dark:bg-primary-900/20' : 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
                Logs
            </a>
        </div>

        <div class="mt-8 pt-8 border-t border-gray-200 dark:border-gray-700">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Pengaturan</p>
            <div class="space-y-2">
                <a href="{{ route('admin.settings') }}" class="{{ request()->routeIs('admin.settings') ? 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-primary-600 bg-primary-50 dark:text-primary-400 dark:bg-primary-900/20' : 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Setting
                </a>
                <a href="{{ route('admin.site-settings') }}" class="{{ request()->routeIs('admin.site-settings') ? 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-primary-600 bg-primary-50 dark:text-primary-400 dark:bg-primary-900/20' : 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Site Setting
                </a>
                <a href="{{ route('admin.smtp') }}" class="{{ request()->routeIs('admin.smtp') ? 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-primary-600 bg-primary-50 dark:text-primary-400 dark:bg-primary-900/20' : 'nav-item flex items-center px-3 py-2.5 text-sm font-medium rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-200' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                    </svg>
                    SMTP
                </a>
            </div>
        </div>
    </nav>
</div>

<style>
    .sidebar-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .sidebar-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }
    .sidebar-scrollbar::-webkit-scrollbar-thumb {
        background: #e2e8f0;
        border-radius: 2px;
    }
    .sidebar-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #cbd5e1;
    }
</style>

<script>
    // Toggle sidebar on mobile
    document.addEventListener('DOMContentLoaded', function() {
        const openSidebarBtn = document.getElementById('openSidebar');
        const closeSidebarBtn = document.getElementById('closeSidebar');
        const sidebar = document.getElementById('sidebar');
        
        if (openSidebarBtn) {
            openSidebarBtn.addEventListener('click', function() {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
            });
        }
        
        if (closeSidebarBtn) {
            closeSidebarBtn.addEventListener('click', function() {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('translate-x-0');
            });
        }
    });
</script>