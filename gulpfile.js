var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var autoprefixer = require('gulp-autoprefixer');
var mmq = require('gulp-merge-media-queries');
var connect = require('gulp-connect-php');

gulp.task('sass', function() {
  return gulp.src('assets/css/**/*.scss') // Gets all files ending with .scss in assets/scss
    .pipe(sass())
    .pipe(autoprefixer({
            browsers: ['last 5 versions'],
            cascade: false
        }))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('connect-sync', function() {
  connect.server({}, function (){
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  })
});

gulp.task('watch', ['connect-sync', 'sass'],  function(){
  gulp.watch('assets/css/**/*.scss', ['sass']);
  // Reloads the browser whenever HTML or JS files change
  gulp.watch('./*.html', browserSync.reload);
  gulp.watch('./**/*.php', browserSync.reload);
  gulp.watch('assets/js/**/*.js', browserSync.reload);
})

gulp.task('mmq', function () {
  gulp.src('assets/css/*.css')
    .pipe(mmq({
      log: true
    }))
    .pipe(gulp.dest('assets/css/beautify'));
});
