var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer');


//SASS
gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'))
});


////Autoprexifer (virker ikke lige nu)
// gulp.task('autoprefixer', () =>
//     gulp.src('css/style.css')
//         .pipe(autoprefixer({
//             browsers: ['last 2 versions'],
//             cascade: false
//         }))
//         .pipe(gulp.dest('css'))
// );
 
 
 //Browser sync
gulp.task('connect-sync', function() {
  connect.server({}, function (){
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });
});


//browser sync
gulp.task('bs-reload', function () {
    browserSync.reload();
});


gulp.task('default', ['connect-sync'], function () {
    gulp.watch(['./*.php','./*.js', './css/*.css', './sass/*.scss'], ['styles']);
    // gulp.watch(['./*.php','./*.js', './css/*.css', './sass/*.scss'], ['autoprefixer']);
    gulp.watch(['./*.php','./*.js', './css/*.css', './sass/*.scss'], ['bs-reload']);
});