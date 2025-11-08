// Admin JavaScript functionality

document.addEventListener('DOMContentLoaded', function() {
    // Initialize sidebar toggle functionality
    const openSidebarBtn = document.getElementById('openSidebar');
    const closeSidebarBtn = document.getElementById('closeSidebar');
    const sidebar = document.getElementById('sidebar');
    
    if (openSidebarBtn && sidebar) {
        openSidebarBtn.addEventListener('click', function() {
            sidebar.classList.remove('-translate-x-full');
            sidebar.classList.add('translate-x-0');
        });
    }
    
    if (closeSidebarBtn && sidebar) {
        closeSidebarBtn.addEventListener('click', function() {
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('translate-x-0');
        });
    }
    
    // Initialize Lucide icons if available
    if (window.lucide && typeof lucide.createIcons === 'function') {
        lucide.createIcons();
    }
    
    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        const isClickInsideSidebar = sidebar.contains(event.target);
        const isClickOnMenuButton = openSidebarBtn && openSidebarBtn.contains(event.target);
        
        if (!isClickInsideSidebar && !isClickOnMenuButton && window.innerWidth < 1024) {
            if (!sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('translate-x-0');
            }
        }
    });
    
    // Responsive behavior for sidebar
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024) {
            // On large screens, always show sidebar
            sidebar.classList.remove('-translate-x-full', 'translate-x-0');
            sidebar.classList.add('static');
        } else {
            // On small screens, hide sidebar by default
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('static');
        }
    });
    
    // Trigger resize to set initial state
    window.dispatchEvent(new Event('resize'));
});