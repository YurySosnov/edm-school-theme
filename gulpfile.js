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
let imgPath = ['img_src/*'];
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

function img() {
    return src(imgPath)
        .pipe(imagemin())
        .pipe(dest('img_dest'));
}

function wcss() {
    css();
    livereload.listen();
    watch('./less/*', css);
}

exports.default = defaultTask;
exports.css = css;
exports.img = img;
exports.wcss = wcss;