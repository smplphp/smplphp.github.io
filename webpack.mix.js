const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.js('source/_assets/js/main.js', 'js')
   .sass('source/_assets/sass/main.scss', 'css/main.css')
   .jigsaw({
       watch: [
           'config.php',
           'source/**/*.md',
           'source/**/*.php',
           'source/**/*.scss',
       ],
   })
   .options({
       processCssUrls: false,
   })
   .copy('node_modules/@fortawesome/fontawesome-pro/webfonts/*', 'source/assets/build/fonts/fontawesome/')
   .sourceMaps()
   .version();
