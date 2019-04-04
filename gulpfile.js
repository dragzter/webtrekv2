const gulp = require('gulp');
const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const minify = require('gulp-minify');

var paths = {
  styles: {
    src: 'src/scss/**/*.scss',
    dest: 'wp-content/themes/webtrek/assets/css/'
  },
  scripts: {
    src: 'src/js/**/*.js',
    dest: 'wp-content/themes/webtrek/assets/js/'
  }
};

/*
 * Define our tasks using plain functions
 */
function styles() {
  return gulp.src(paths.styles.src)
    .pipe(sass())
    .pipe(minifyCSS())
    .pipe(gulp.dest(paths.styles.dest));
}

function js() {
  return gulp.src(paths.scripts.src)
    .pipe(minify())
    .pipe(gulp.dest(paths.scripts.dest));
}

function watch() {
  gulp.watch([paths.styles.src, paths.scripts.src], gulp.parallel(styles, js));
}

/*
 * You can use CommonJS `exports` module notation to declare tasks
 */
//exports.styles = styles;
//exports.watch = watch;

/*
 * Define default task that can be called by just running `gulp` from cli
 */
exports.default = watch;