/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        fontFamily: {
            sans: ['Inter', 'sans-serif']
        },
        extend: {
            colors: {
                orange: '#E44D28',
                black: '#272727',
                red: '#EA283F',
                charcoal: '#404040',
                steel: '#7A7A7A',
                grey: '#8A8A8A',
                concrete: '#9B9B9B',
                sand: '#D6D4C9'
            },
            fontSize: {
                '2.5xl' : '32px',
                '7.5xl': '82px'
            },
            lineHeight: {
                '4.5': '18px',
                '20': '80px'
            },
            letterSpacing: {
                'header-d': '-6px',
                'header-m': '-2px',
                'body-d': '-0.5px',
                'body-m': '-0.25px',
                'details-d' : '-0.2px',
                'details-m' : '-0.25px'
            }
        },
    },
    plugins: [],
}
