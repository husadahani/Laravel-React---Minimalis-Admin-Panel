/******/ (() => { // webpackBootstrap
/*!********************************!*\
  !*** ./resources/js/public.js ***!
  \********************************/
// Public site JavaScript functionality

document.addEventListener('DOMContentLoaded', function () {
  // Mobile menu toggle
  var mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
  var mobileMenu = document.getElementById('mobile-menu');
  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', function () {
      var isHidden = mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden');
      mobileMenuButton.setAttribute('aria-expanded', !isHidden);

      // Toggle the menu icons
      var menuIcon = mobileMenuButton.querySelector('svg:first-child');
      var closeIcon = mobileMenuButton.querySelector('svg:last-child');
      menuIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    });
  }

  // Dark mode toggle functionality
  var darkModeToggle = document.getElementById('dark-mode-toggle');
  if (darkModeToggle) {
    var sunIcon = document.getElementById('sun-icon');
    var moonIcon = document.getElementById('moon-icon');

    // Initialize icons based on current theme
    if (document.documentElement.classList.contains('dark')) {
      sunIcon.classList.add('hidden');
      moonIcon.classList.remove('hidden');
    } else {
      sunIcon.classList.remove('hidden');
      moonIcon.classList.add('hidden');
    }
    darkModeToggle.addEventListener('click', function (e) {
      e.preventDefault();
      document.documentElement.classList.toggle('dark');

      // Toggle visibility of icons
      sunIcon.classList.toggle('hidden');
      moonIcon.classList.toggle('hidden');
    });
  }

  // Form validation for contact form
  var contactForm = document.querySelector('form');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();

      // Simple validation
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var message = document.getElementById('message').value;
      if (!name || !email || !message) {
        alert('Mohon lengkapi semua field yang wajib diisi.');
        return;
      }

      // In a real application, you would send the form data to a server
      alert('Terima kasih! Pesan Anda telah dikirim.');
      contactForm.reset();
    });
  }

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        window.scrollTo({
          top: target.offsetTop - 80,
          // Account for fixed header
          behavior: 'smooth'
        });
      }
    });
  });
});
/******/ })()
;