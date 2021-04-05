const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: theme => ({
             'right-multigons': "url('/multigons.svg')",
            })
        },
        backgroundSize: {
          'auto': 'auto',
          'cover': 'cover',
          'contain': 'contain',
          '50': '50%',
          '100': '100%',
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
