const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: false,
    // mode: 'jit',
    // purge: [
    //     './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    //     './vendor/laravel/jetstream/**/*.blade.php',
    //     './storage/framework/views/*.php',
    //     './resources/views/**/*.blade.php',
    // ],

    theme: {
        screens: {
          sm: '576px',
          md: '768px',
          lg: '992px',
          xl: '1200px',
        },
        container: {
          center: true,
          padding: '1rem',
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'main':'red',
                'submain':'blue'
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
