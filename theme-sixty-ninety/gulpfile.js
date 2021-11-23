const gulp = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const gap = require('gulp-append-prepend')

const minify = require('gulp-minify')

function buildStyles() {
  return gulp.src('./style.scss')
    .pipe(sass().on('error',sass.logError))
    .pipe(minify())
    .pipe(gap.prependFile('./css-header.txt'))
    .pipe(gulp.dest('.'))
}

exports.default = buildStyles

exports.watch = function watch() {
  return gulp.watch(['./style.scss'], buildStyles)
}