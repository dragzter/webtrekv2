var gulp = require('gulp');
var sass = require('gulp-sass');

var paths = {
  styles: {
    src: 'scss/**/*.scss',
    dest: 'wp-content/themes/webtrek/css/'
  },
};

/*
 * Define our tasks using plain functions
 */
function styles() {
  return gulp.src(paths.styles.src)
    .pipe(sass())
    .pipe(gulp.dest(paths.styles.dest));
}

function watch() {
  gulp.watch(paths.styles.src, styles);
}

/*
 * You can use CommonJS `exports` module notation to declare tasks
 */
exports.styles = styles;
exports.watch = watch;

/*
 * Define default task that can be called by just running `gulp` from cli
 */
exports.default = watch;