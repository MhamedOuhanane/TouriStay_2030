import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                primary: '#00B050',
                secondary: '#FF6B6B',
                light: '#A7F0D1',
                dark: '#1A1A1A',
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
            },
        }
    },

    plugins: [forms],
};
