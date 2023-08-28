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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        screens: {
            'ss': '550px',   // Small screens
            'sm': '640px',   // Small screens
            'md': '768px',   // Medium screens
            'lg': '1024px',  // Large screens
            'xl': '1280px',  // Extra large screens
            // Add more breakpoints if needed
        }
    },

    plugins: [forms],
};
