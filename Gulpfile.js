var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat');


//SASS
gulp.task('styles', function() {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'))
});


////Autoprexifer (virker ikke lige nu)
gulp.task('autoprefixer', () =>
    gulp.src('css/style.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('css'))
);

//Susy for grid
gulp.task('sass', function() {
  return gulp.src('./scss/style.scss')
      .pipe(sass({
          outputStyle: 'compressed',
          includePaths: ['node_modules/susy/sass']
      }).on('error', sass.logError))
      .pipe(gulp.dest('./css'));
});
 
 //Browser sync
gulp.task('connect-sync', function() {
  connect.server({port: 8010}, function (){
    browserSync({
      proxy: "127.0.0.1:8010",
      port: 8080,
      open: true
    });
  });
});


//browser sync
gulp.task('bs-reload', function () {
    browserSync.reload();
});

//Concatenate SASS files
gulp.task('concat', function() {
  return gulp.src(['sass/mobile.scss', 'sass/tablet.scss', 'sass/desktop.scss'])
    .pipe(concat('style.scss'))
    .pipe(gulp.dest('./sass/'));
});


gulp.task('default', ['connect-sync'], function() {
  //watch SASS
  gulp.watch(['./sass/*.scss'], ['styles', 'concat', 'sass']);
  //watch changed files
  gulp.watch(['./css/*.css'], ['bs-reload']);
});

gulp.task('build', ['autoprefixer'], function () {
    // gulp.watch(['./*.php','./*.js', './sass/*.scss'], ['styles', 'concat', 'sass']);
    // gulp.watch(['./*.php','./*.js', './sass/*.scss', './css/*.css'], ['bs-reload']);
    // gulp.watch(['./*.php','./*.js', './css/*.css', './sass/*.scss'], ['autoprefixer']);
    // gulp.watch(['./*.php','./*.js', './css/*.css', './sass/*.scss'], ['bs-reload']);
    // gulp.watch(['./*.php','./*.js', './css/*.css', './sass/*.scss'], ['concat']);
    // gulp.watch(['./*.php','./*.js', './css/*.css', './sass/*.scss'], ['sass']);
});