/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
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
            transitionDuration: {
                '2000': '2000ms',
                '10s' : '10000ms'
            },
            boxShadow: {
                'card': '-2px 4px 6px 2px rgba(0, 0, 0, 0.15)',
                'large': '-1.60148px 3.20297px 4.80445px 1.60148px rgba(0, 0, 0, 0.15)'
},
            spacing: {
              'work-lg': '460px'
            },
            height: {
                'newsletter': '550px'
            },
            width: {
              'newsletter': '525px'
            },
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
                'xxs': '10px',
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
    plugins: [
        require('@tailwindcss/forms')
    ],
}
