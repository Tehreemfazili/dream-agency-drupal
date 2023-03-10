// import gulp from 'gulp';
// import babel from 'gulp-babel';

const { series, watch } = require('gulp');
var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const babel = require('gulp-babel');
const minify = require('gulp-minify');

const paths = {
    styles: {
      src: 'sass/style.scss',
      dest: 'dist/css'
    },
    scripts: {
      src: 'js/*.js',
      dest: 'dist/js'
    }
  };

 function styles() {
    return gulp.src(paths.styles.src)
      .pipe(sass())
      .pipe(gulp.dest(paths.styles.dest));
    //   .pipe(cleanCSS())
    //   pass in options to the stream
    //   .pipe(rename({
    //     basename: 'main',
    //     suffix: '.min'
    //   }))
      
  }
  
 function scripts() {
    return gulp.src(paths.scripts.src)
      .pipe(babel())
      .pipe(minify())
    //   .pipe(concat('main.min.js'))
      .pipe(gulp.dest(paths.scripts.dest));
  }
  
   /*
    * You could even use `export as` to rename exported tasks
    */
  function watchFiles() {
    watch(paths.scripts.src, scripts);
    watch(paths.styles.src, styles);
  }

  exports.default = series(
    styles,
    scripts,
    watchFiles
  )

//   export { watchFiles as watch };
  
//   const build = series(clean, parallel(styles, scripts));
//   /*
//    * Export a default task
//    */
//   export default build;
