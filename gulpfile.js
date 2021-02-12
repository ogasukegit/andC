const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
// const cleanCSS = require('gulp-clean-css');
const sass = require('gulp-sass');

const srcFiles = [
  './assets/styles/sass/styles.scss',
];
const watchDirs = [
  './assets/styles/sass/*/*.scss',
];
const destDir = './assets/styles/css';
const concatFile = 'all_styles.css';

// functions
const swallowError = function(error) {
  console.log(error.toString());
  this.emit('end');
}
const rollupCSS = function() {
  return gulp.src(srcFiles)
    .pipe(sass()) // compile sass
    .on('error', swallowError)
    .pipe(autoprefixer({ // add vendor prefixes
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(concat(concatFile)) // concatenate
    // .pipe(cleanCSS({compatibility: 'ie8'})) // minify
    .pipe(gulp.dest(destDir)) // write
};

// tasks
gulp.task('build', function() {
  rollupCSS();
});
gulp.task('watch', function() {
  rollupCSS();
  gulp.watch(watchDirs, ['build']);
});
