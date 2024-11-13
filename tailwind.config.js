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
                hiragino: [
                    '"Hiragino Kaku Gothic Pro"',
                    '"ヒラギノ角ゴ Pro"',
                    '"Hiragino Sans"',
                    'sans-serif'
                ],
            },
            boxShadow: {
                custom: '0px 2px 4px 0px rgba(0, 0, 0, 0.25)', // #00000040をrgbaに変換
            },
        },
    },

    plugins: [forms],
};
