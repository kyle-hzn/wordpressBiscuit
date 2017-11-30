var gulp     = require( 'gulp' ),
gulp_cssnano = require('gulp-cssnano'),
gulp_rename  = require('gulp-rename'),
gulp_uglify  = require('gulp-uglify'),
gulp_concat  = require('gulp-concat'),
gulp_autoprefixer = require ( 'gulp-autoprefixer' ),
gulp_sass = require('gulp-sass');

gulp.task( 'default', [ 'sass','css', 'js', 'watch' ], function() {} );



gulp.task('sass', function () {
    return gulp.src('assets/scss/main.scss')
    .pipe(gulp_sass.sync().on('error', gulp_sass.logError))
    .pipe(gulp_rename('style.css'))
    .pipe(gulp.dest('assets/styles/'));
});



gulp.task( 'css', function()
{
    return gulp.src('assets/styles/style.css')
    .pipe(gulp_autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(gulp_cssnano())
    .pipe(gulp_rename('style.min.css'))
    .pipe(gulp.dest('assets/build/css/'))
} );




gulp.task( 'js',function()
{
    return gulp.src( [
        'assets/scripts/*.js'
    ] )
    .pipe( gulp_concat( 'main.min.js' ) )
    .pipe( gulp_uglify() )
    .pipe( gulp.dest( 'assets/build/js/' ) );
} );




gulp.task( 'watch', function()
{
    gulp.watch('assets/scss/**/*.scss', ['sass']);
    gulp.watch( 'assets/styles/style.css', [ 'css' ] );
    gulp.watch( [ 'assets/scripts/**', '!assets/scripts/main.min.js' ], [ 'js' ] );
} );




// gulp.task('zip', function()
// {
//     return gulp.src('')
//         .pipe(zip('archive.zip'))
//         .pipe(gulp.dest('dist'));
// })
