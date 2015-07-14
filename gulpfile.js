// Load all the modules from package.json
var gulp = require( 'gulp' ),
  plumber = require( 'gulp-plumber' ),
  autoprefixer = require('gulp-autoprefixer'),
  watch = require( 'gulp-watch' ),
  livereload = require( 'gulp-livereload' ),
  minifycss = require( 'gulp-minify-css' ),
  jshint = require( 'gulp-jshint' ),
  stylish = require( 'jshint-stylish' ),
  uglify = require( 'gulp-uglify' ),
  rename = require( 'gulp-rename' ),
  notify = require( 'gulp-notify' ),
  include = require( 'gulp-include' ),
  sass = require( 'gulp-sass' );
  imagemin = require('gulp-imagemin');
  bower = require('gulp-bower');
  zip = require('gulp-zip');

var config = {
     bowerDir: './bower_components' 
}
 
 
// Default error handler
var onError = function( err ) {
  console.log( 'An error occured:', err.message );
  this.emit('end');
}

gulp.task('zip', function () {
 return gulp.src([
   '*',
   './inc/*',
   './js/**/*',
   './languages/*',
   './sass/**/*',
   './template-parts/*',
   './templates/*',
   '!bower_components',
   '!node_modules',
  ], {base: "."})
  .pipe(zip('mdlwp.zip'))
  .pipe(gulp.dest('.'));
});

// Install all Bower components
gulp.task('bower', function() {
  return bower()
    .pipe(gulp.dest(config.bowerDir))
});

 
// Jshint outputs any kind of javascript problems you might have
// Only checks javascript files inside /src directory
gulp.task( 'jshint', function() {
  return gulp.src( './js/src/*.js' )
    .pipe( jshint() )
    .pipe( jshint.reporter( stylish ) )
    .pipe( jshint.reporter( 'fail' ) );
})
 
 
// Concatenates all files that it finds in the manifest
// and creates two versions: normal and minified.
// It's dependent on the jshint task to succeed.
gulp.task( 'scripts', ['jshint'], function() {
  return gulp.src( './js/manifest.js' )
    .pipe( include() )
    .pipe( rename( { basename: 'scripts' } ) )
    .pipe( gulp.dest( './js/dist' ) )
    // Normal done, time to create the minified javascript (scripts.min.js)
    // remove the following 3 lines if you don't want it
    .pipe( uglify() )
    .pipe( rename( { suffix: '.min' } ) )
    .pipe( gulp.dest( './js/dist' ) )
    .pipe(notify({ message: 'scripts task complete' }))
    .pipe( livereload() );
} );

// As with javascripts this task creates two files, the regular and
// the minified one. It automatically reloads browser as well.
var options = {};
options.sass = {
  errLogToConsole: true,
  sourceMap: 'sass',
  sourceComments: 'map',
  precision: 10,
  //imagePath: 'assets/img',
};
options.autoprefixer = {
  map: true
  //from: 'sass',
  //to: 'asrp.min.css'
};

gulp.task('sass', function() {
  return gulp.src('./sass/style.scss')
    .pipe( plumber( { errorHandler: onError } ) )
    .pipe(sass(options.sass))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4',
      options.autoprefixer
      ))
    .pipe( gulp.dest( '.' ) )
    .pipe( minifycss() )
    .pipe( rename( { suffix: '.min' } ) )
    .pipe( gulp.dest( '.' ) )
    .pipe(notify({ message: 'sass task complete' }))
    .pipe( livereload() );
});

// Optimize Images
gulp.task('images', function() {
  return gulp.src('./images/**/*')
    .pipe(imagemin({ progressive: true, svgoPlugins: [{removeViewBox: false}]}))
    .pipe(gulp.dest('./images'))
    .pipe(notify({ message: 'Images task complete' }));
});
 
 
// Start the livereload server and watch files for change
gulp.task( 'watch', function() {
  livereload.listen();
 
  // don't listen to whole js folder, it'll create an infinite loop
  gulp.watch( [ './js/**/*.js', '!./js/dist/*.js' ], [ 'scripts' ] )
 
  gulp.watch( './sass/**/*.scss', ['sass'] );

  gulp.watch('./images/**/*', ['images']);
 
  gulp.watch( './**/*.php' ).on( 'change', function( file ) {
    // reload browser whenever any PHP file changes
    livereload.changed( file );
  } );
} );
 
 
gulp.task( 'default', ['watch'], function() {
 // Does nothing in this task, just triggers the dependent 'watch'
} );