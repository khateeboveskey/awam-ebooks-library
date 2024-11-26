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
                'primary': {
                    '50': '#fbf7f1',
                    '100': '#f5ecdf',
                    '200': '#ebd7bd',
                    '300': '#deba93',
                    '400': '#d4a276',
                    '500': '#c57e4a',
                    '600': '#b76a3f',
                    '700': '#995435',
                    '800': '#7b4531',
                    '900': '#643a2a',
                    '950': '#351d15',
                },
            },
            fontFamily: {
                'musnad': ['Noto Sans Old South Arabian'],
                'din-ultralight': ['DIN-NEXT-ARABIC-ULTRALIGHT'],
                'din-regular': ['DIN-NEXT-ARABIC-REGULAR'],
                'din-medium': ['DIN-NEXT-ARABIC-MEDIUM'],
                'din-light': ['DIN-NEXT-ARABIC-LIGHT'],
                'din-heavy': ['DIN-NEXT-ARABIC-HEAVY'],
                'din-bold': ['DIN-NEXT-ARABIC-BOLD'],
                'din-black': ['DIN-NEXT-ARABIC-BLACK'],
                sans: [
                    ...defaultTheme.fontFamily.sans,
                ],
                serif: [
                    'Maa-Aldahab'
                ],
            },
        },
    },

    plugins: [forms],
};
