const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const minify = require('gulp-minify');

// Development Tasks 
gulp.task('sass', function() {
    return gulp.src('app/scss/**/*.scss') 
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError)) 
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest('app/css')) 
})
 
// Watchers
gulp.task('watch', function() {
    gulp.watch('app/scss/**/*.scss', gulp.series('sass'));
})

// Gulp task to minify JavaScript files
gulp.task('minifyjs', () => {
    return gulp.src('app/js/*.js')
    .pipe(minify())
    .pipe(gulp.dest('app/js'))
})