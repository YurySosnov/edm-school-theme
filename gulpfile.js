const
    concat = require('gulp-concat'),
    jsmin = require('gulp-jsmin'),
    cssmin = require('gulp-cssmin'),
    less = require('gulp-less'),
    rename = require('gulp-rename'),
    replace = require('gulp-replace'),
    imagemin = require('gulp-imagemin'),
    svgo = require('gulp-svgo'),
    watch = require('gulp-watch'),
    livereload = require('gulp-livereload');


let lessPath = ['./less/theme.less'];

const { src, dest } = require('gulp');

function defaultTask(cb) {
    // place code for your default task here
    cb();
}

function css() {
    return src(lessPath)
        .pipe(less())
        // .pipe(concat('theme.css'))
        .pipe(dest('css'))
        .pipe(livereload({ start: true }));
}

function wcss() {
    css();
    livereload.listen();
    watch('./less/*', css);
}

exports.default = defaultTask;
exports.css = css;
exports.wcss = wcss;