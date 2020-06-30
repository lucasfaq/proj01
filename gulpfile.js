/* jslint node: true */
/* exported watch */

'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
 
gulp.task('sass', function(){
    return gulp.src('sass/**/*.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('styles'));
});

gulp.task('watch', function(){
    console.log(" ");
    gulp.watch('sass/**/*.sass', gulp.series('sass'));
    console.log(" ");
});

gulp.task('default', gulp.series('sass', 'watch'));