var elixir = require('laravel-elixir');

// Config
elixir.config.sourcemaps = false;

elixir(function (mix) {
    var bower_path = "./resources/assets/sources";
    var paths = {
        'jquery': bower_path + "/jquery/dist",
        'bootstrap': bower_path + "/bootstrap",
        'fontawesome': bower_path + "/fontawesome",
        'tablesorter': bower_path + "/tablesorter"
    };

    // Compile SCSS
    mix.sass('app.scss', 'public/assets/css', {
        includePaths: [
            paths.fontawesome + '/scss'
        ]
    });

    // Combine all JS files
    mix.scripts([
        paths.jquery + '/jquery.min.js',
        paths.bootstrap + '/dist/js/bootstrap.min.js',
        paths.tablesorter + '/jquery.tablesorter.js'
    ], 'public/assets/js/dependencies.js', bower_path);

    mix.scripts('resources/assets/js/app.js', 'public/assets/js/app.js');

    // Copy Assets
    mix.copy(paths.fontawesome + '/fonts', 'public/build/assets/fonts');

    // Version CSS and JS
    mix.version([
        'public/assets/css/app.css',
        'public/assets/js/dependencies.js',
        'public/assets/js/app.js'
    ]);
});
