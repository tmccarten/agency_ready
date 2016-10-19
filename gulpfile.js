var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function() {
  return gulp.src('assets/css/**/*.scss') // Gets all files ending with .scss in app/scss
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

gulp.task('watch', ['browserSync', 'sass'],  function(){
  gulp.watch('assets/css/**/*.scss', ['sass']);
  // Reloads the browser whenever HTML or JS files change
  gulp.watch('*.html', browserSync.reload);
  gulp.watch('assets/js/**/*.js', browserSync.reload);
})

gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      baseDir: ''
    },
  })
})