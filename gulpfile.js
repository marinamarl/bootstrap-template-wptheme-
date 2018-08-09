var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var pkg = require('./package.json'),
// my vars
    gulp = require('gulp'),
    gutil = require('gulp-util'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat');

// the source paths as variables
var jsSources = ['wp-content/themes/theming/js/*.js'],
    sassSources = ['styles/*.scss'],
    phpSources = ['/wp-content/themes/theming/*.php'],
    outputDir = 'assets';

// Copy third party libraries from /node_modules into /vendor
gulp.task('vendor', function() {

  // Bootstrap
  gulp.src([
      './node_modules/bootstrap/dist/**/*',
      '!./node_modules/bootstrap/dist/css/bootstrap-grid*',
      '!./node_modules/bootstrap/dist/css/bootstrap-reboot*'
    ])
    .pipe(gulp.dest('./vendor/bootstrap'))

  // jQuery
  gulp.src([
      './node_modules/jquery/dist/*',
      '!./node_modules/jquery/dist/core.js'
    ])
    .pipe(gulp.dest('./vendor/jquery'))

})

// Default task
gulp.task('default', ['vendor']);

// Configure the browserSync task
gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      baseDir: "wp_theming/"
    }
  });
});

// Watch task
gulp.task('watch', ['browserSync'], function() {
  gulp.watch('./css/*.css', browserSync.reload);
  gulp.watch('./*.html', browserSync.reload);
  gulp.watch(jsSources, ['js'],browserSync.reload);
  gulp.watch(sassSources, ['sass'],browserSync.reload);
  gulp.watch(phpSources, ['php'],browserSync.reload);
});

// my own tasks

// recompile sass task
gulp.task('sass', function() {
  gulp.src(sassSources)
  .pipe(sass({style: 'expanded'}))
    .on('error', gutil.log)
  .pipe(gulp.dest('assets'))
});
// uglify js task
gulp.task('js', function() {
  gulp.src(jsSources)
  .pipe(uglify())
  .pipe(concat('script.js'))
  .pipe(gulp.dest(outputDir))
});

gulp.task('default', ['js', 'sass', 'browserSync', 'watch']);
