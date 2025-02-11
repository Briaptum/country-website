import defaultTheme from 'tailwindcss/defaultTheme';
import tailwindcss from '@tailwindcss/vite'
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            keyframes: {
                typing: {
                  "0%": {
                    width: "0%",
                    visibility: "hidden"
                  },
                  "100%": {
                    width: "100%"
                  }  
                },
                blink: {
                  "50%": {
                    borderColor: "transparent"
                  },
                  "100%": {
                    borderColor: "white"
                  }  
                }
              },
              animation: {
                typing: "typing 2s steps(20) infinite alternate, blink .7s infinite"
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'custom-red': '#e72222',
                'custom-yellow': '#e7a43b',
                'custom-blue': '#8cb8c5',
                'custom-pink': '#d0839a',
                'custom-pale': '#ddb1b1',
            },
            screens: {
                'nav': '1115px',
                'menu': '1000px',
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
            },
        },
    },
    plugins: [],
};
