/**
 * Configure the laravel mix plugin
 *
 * @author Jeffrey Way
 */
let mix = require('laravel-mix');

/**
 * Set the Public Path
 */
mix.setPublicPath('/');

// mix.js('assets/js/app.js', 'dist');
mix.sass('assets/scss/main.scss', 'dist');
