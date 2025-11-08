/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.{js,ts,jsx,tsx,vue}",
        "./resources/css/app.css",
        "./storage/framework/views/*.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: '#eef2ff',
                    100: '#e0e7ff',
                    500: '#6366f1',
                    600: '#4f46e5',
                    700: '#4338ca'
                }
            },
            fontFamily: {
                'sans': ['Inter', 'ui-sans-serif', 'system-ui']
            }
        },
    },
    plugins: [],
    mode: 'jit',
}