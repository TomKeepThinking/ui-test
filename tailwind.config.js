/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: ['Inter', 'sans-serif'],
        },
        extend: {
            colors: {
                'sand': '#D6D4C9',
                'concrete' : '#9B9B9B',
                'gray' : '#8A8A8A',
                'steel': '#7A7A7A',
                'charcoal': '#404040',
                'orange': '#E44D28',
                'red' : '#EA283F',
            },
            fontSize:{
                '7.5xl': '5.125rem',
            },
            lineHeight: {
                'header-desktop': '5rem',
                'header-mobile': '2.25rem',
                'details': '1.125rem',
            },
            letterSpacing: {
                'header-desktop' : '-0.375rem',
                'header-mobile' : '-0.125rem',
                'body-desktop': '-0.031rem',
                'body-mobile': '-0.016rem',
                'details-desktop': '-0.013rem',
                'details-mobile': '-0.016rem',
            }
        },
    },
    plugins: [],
}
// text-lg - 18px
// text-sm - 14px
// text-xs - 12px
//  Header Mobile - Line Height - leading-9 - 36px
// Body Desktop - Line Height - leading-6 - 24px
// Body Mobile - Line Height - leading-5 - 20px
// Details Desktop - Line Height - leading-5 - 20px
// Details Mobile - Line Height - leading-5 - 20px
