/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        screens: {
            'sm': '640px',

            'md': '768px',

            'lg': '1024px',

            'xl': '1440px',

            '2xl': '1536px',
        },
        fontFamily: {
            sans: ['Inter', 'sans-serif']
        },
        extend: {
            zIndex: {
                '100': '100',
            },
            transitionDuration: {
                '2000': '2000ms',
                '10s' : '10000ms'
            },
            boxShadow: {
                'card': '-2px 4px 6px 2px rgba(0, 0, 0, 0.15)',
                'large': '-1.60148px 3.20297px 4.80445px 1.60148px rgba(0, 0, 0, 0.15)'
            },
            spacing: {
                'work-sm': '360px',
                'work-lg': '460px',
                'work-single' : '679px',
                4: '15px',
                6: '22px',
                8: '30px',
                36: '140px'
            },
            inset: {
               'nav': '65px'
            },
            height: {
                'newsletter': '550px',
                'nav': '65px'
            },
            width: {
              'newsletter': '525px'
            },
            colors: {
                orange: '#E44D28',
                black: '#272727',
                red: '#E91932',
                charcoal: '#404040',
                steel: '#7A7A7A',
                grey: '#595959',
                concrete: '#9B9B9B',
                sand: '#D6D4C9',
                teal: '#028982'
            },
            fontSize: {
                'xxs': '10px',
                '2.5xl' : '32px',
                '7.5xl': '82px'
            },
            lineHeight: {
                '4.5': '18px',
                '6': '24px',
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
