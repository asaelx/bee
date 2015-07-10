var elixir      = require('laravel-elixir'),
    jade        = require('laravel-elixir-jade'),
    livereload  = require('laravel-elixir-livereload');

elixir.config.sourcemaps = false;

elixir(function(mix) {

    mix.rubySass('style.sass', 'public/css/style.css');

    mix.scripts([
        'jquery.min.js',
        'plugins/*.js',
        'magic.js'
    ], "public/js/min/magic.min.js", "resources/assets/js");

    mix.jade({
        src: '/assets/jade/',
        search: '**/*.jade'
    });

    mix.livereload();

});
