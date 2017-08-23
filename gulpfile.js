var gulp        = require('gulp');
var sass        = require('gulp-sass');
var plumber     = require('gulp-plumber');
var browserSync = require('browser-sync');

gulp.task('browser-sync', function() {
    var files = [
        './style.css',
        './**/*.php'
    ];

    browserSync.init(files, {
        proxy: 'http://dev.officelondonccgs.org.uk' //Change this for your own local dev environment. This is specifically defined for Dan.
    })
});

gulp.task('sass', function() {
    return gulp.src('src/sass/*.scss')
        .pipe(plumber())
        .pipe(sass({
            'outputStyle': 'compressed'
        }))
        .pipe(gulp.dest('./'))
        .pipe(browserSync.stream());
});

gulp.task('development', ['sass', 'browser-sync'], function() {
    gulp.watch('src/sass/**/*.scss', ['sass'])
});

