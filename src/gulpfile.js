var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    browserSync = require('browser-sync').create(),
    autoprefixer = require('gulp-autoprefixer'),
    minify = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename');

gulp.task('build-css', function() {
  gulp.src('./style/master.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 25 versions']
    }))
    .pipe(minify())
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('../public/assets/css'))
    .pipe(browserSync.stream());
});

gulp.task('build-js', function() {
  gulp.src('./scripts/*.js')
    .pipe(concat('master.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('../public/assets/js'))
    .pipe(browserSync.stream());
});

gulp.task('serve', function() {
  browserSync.init({
    proxy: 'project.dev'
  });
})

gulp.task('watch', function(){
  gulp.watch('./style/**/*.scss', ['build-css']);
  gulp.watch('./scripts/**/*.js', ['build-js']);
  gulp.watch('../templates/**/*.twig').on('change', browserSync.reload);
})

gulp.task('default', ['build-css', 'serve', 'watch']);
gulp.task('build', ['build-css', 'build-js']);
