const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: theme => ({
             'right-multigons': "url('/poligons/poligon.svg')",
             'left-multigons': "url('/poligons/r.svg')",
             'right-white-multigons': "url('/poligons/w.svg')",
             'slide1': "url('/slides/s1.webp')",
            })
        },
        backgroundSize: {
          'auto': 'auto',
          'cover': 'cover',
          'contain': 'contain',
          '50': '30%',
          '100': '70%',
        }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
      require('@tailwindcss/forms'),
    ],
};
