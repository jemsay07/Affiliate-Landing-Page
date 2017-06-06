var gulp = require('gulp');
var elixir = require('laravel-elixir');

gulp.task('default', function() {
  console.log('hello jem')
});

//elixir
elixir(function(mix) {
    mix.sass('app.scss')
});
