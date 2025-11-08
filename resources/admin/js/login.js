// Admin login JavaScript functionality

document.addEventListener('DOMContentLoaded', function() {
    // Any specific login page functionality can be added here
    const loginForm = document.querySelector('form');
    
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            // Add loading state or validation if needed
            const submitBtn = loginForm.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.innerHTML = 'Memproses...';
                submitBtn.disabled = true;
            }
        });
    }
});