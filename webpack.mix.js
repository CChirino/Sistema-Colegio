const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.styles([
      'public/asset/css/owl.carousel.css',
      'public/asset/css/owl.theme.css',
      'public/asset/css/owl.transitions.css',
      'public/asset/css/animate.css',
      'public/asset/css/normalize.css',
      'public/asset/css/main.css',
      'public/asset/css/educate-custon-icon.css',
      'public/asset/css/morrisjs/morris.css',
      'public/asset/css/scrollbar/jquery.mCustomScrollbar.min.css',
      'public/asset/css/metisMenu/metisMenu.min.css',
      'public/asset/css/metisMenu/metisMenu-vertical.css',
      'public/asset/css/calendar/fullcalendar.min.css',
      'public/asset/css/calendar/fullcalendar.print.min.css',
      'public/asset/css/form/all-type-forms.css',
      'public/asset/css/style.css',
      'public/asset/css/meanmenu.min.css',
      'public/asset/css/responsive.css',
      'public/asset/css/data-table/bootstrap-table.css'
  ], 'public/css/all.css');

  mix.scripts([
   'public/asset/js/vendor/jquery-1.12.4.min.js',
   'public/asset/js/wow.min.js',
   'public/asset/js/jquery-price-slider.js',
   'public/asset/js/jquery.meanmenu.js',
   'public/asset/js/owl.carousel.min.js',
   'public/asset/js/jquery.sticky.js',
   'public/asset/js/jquery.scrollUp.min.js',
   'public/asset/js/scrollbar/jquery.mCustomScrollbar.concat.min.js',
   'public/asset/js/scrollbar/mCustomScrollbar-active.js',
   'public/asset/js/metisMenu/metisMenu.min.js',
   'public/asset/js/metisMenu/metisMenu-active.js',
   'public/asset/js/tab.js',
   'public/asset/js/icheck/icheck.min.js',
   'public/asset/js/icheck/icheck-active.js',
   'public/asset/js/plugins.js',
   'public/asset/js/main.js',
   'public/asset/js/tawk-chat.js'   
], 'public/js/all.js');












