const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                title: ['Kaushan Script', 'cursive'],
                subtitle: ['K2D', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],
              },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
