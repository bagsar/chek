const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);

 // mix.combine([
// 'public/assets/css/themes/layout/aside/dark.css',
// 'public/assets/css/themes/layout/brand/dark.css',
// 'public/assets/css/themes/layout/header/menu/light.css',
// 'public/assets/css/themes/layout/header/base/light.css',
// 'public/csspath/*.css',
// 'public/assets/plugins/custom/prismjs/prismjs.bundle.css',
// 'public/assets/plugins/global/plugins.bundle.css',
// 'assets/css/style.bundle.css',
// 'public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css',
// 'https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css',
// 'https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css',
// 'https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css',
// 'public/css/custom.css',
// ], 'public/css/master.css');


// mix.combine([
// 'public/plugins/bootstrap/js/bootstrap.bundle.min.js',
// 'public/plugins/chart.js/Chart.min.js',
// 'public/plugins/jquery-knob/jquery.knob.min.js',
// 'public/plugins/moment/moment.min.js',
// 'public/plugins/daterangepicker/daterangepicker.js',
// 'public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
// 'public/plugins/summernote/summernote-bs4.min.js',
// 'public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
// 'public/dist/js/adminlte.js',
// 'public/dist/js/demo.js',
// 'public/dist/js/pages/dashboard.js',
// ], 'public/js/master.js');

mix.combine([
'public/js/tablejs/*.js',
], 'public/js/master-table.js');




if (mix.inProduction()) {
    mix.version();
}
