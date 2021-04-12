const gulp = require('gulp'),
      sass = require('gulp-sass'),
      postcss = require('gulp-postcss'),
      browserSync = require('browser-sync'),
      sourcemaps = require('gulp-sourcemaps');

sass.compiler = require('node-sass');
 
var cssDest = './assets/css';
 
gulp.task('sass', function(){
	return gulp.src('./assets/sass/layout.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(postcss([
      require('autoprefixer'), 
      require('postcss-combine-media-query'), 
      require('postcss-combine-duplicated-selectors')
    ]))
		.pipe(sourcemaps.write())
    .pipe(gulp.dest(cssDest))
    .pipe(browserSync.stream());
});
 
gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: "http://terrascale.local/"
  });
});
 
gulp.task('watch', function(){
	gulp.watch('assets/sass/**/*.scss', gulp.series('sass'));
    gulp.watch('**/*.php').on('change', browserSync.reload);
});
 
gulp.task('default', gulp.parallel('sass','browser-sync','watch'));