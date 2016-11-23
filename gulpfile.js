// @morgan : read this link https://laravel.com/docs/5.0/elixir
// new way of handling gulp

var elixir = require('laravel-elixir');


elixir(function(mix) {

    
    // CSS combining and versioning. This will generate app.css
    mix.less([
        'application.less'
    ]);
    // Application JS versioning
    mix.scripts([
        "application.js"
    ], 'public/js/application.js'); 

});
