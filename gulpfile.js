'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

var SCRIPTS_SRC = [
    'script/**/*.js'
];

var STYLES_SRC = [
    'css/**/*.css',
    //'!css/main.css'
];

var is_production = false;

var VERSION = (function(){
    var min,max;
    min=0; max=9999;

    return (Math.floor(Math.random() * (max - min + 1)) + min);

})();

gulp.task('sass', function () {
    return gulp.src([
         './sass/**/*.scss'
    ])
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./sass/**/*.scss', ['sass']);
});

var uglifycss = require('gulp-uglifycss');

gulp.task('css', function () {
    gulp.src('css/**/*.css')
        .pipe(uglifycss({
            "maxLineLen": 80,
            "uglyComments": true
        }))
        .pipe(gulp.dest('./dist/'));
});

var cleanCSS = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('minify-css', function() {
    return gulp.src('./dist/**/*.css')
        .pipe(cleanCSS({debug: true}, function(details) {
            console.log(details.name + ': ' + details.stats.originalSize);
            console.log(details.name + ': ' + details.stats.minifiedSize);
        }))
        .pipe(gulp.dest('dist'));
});


/* ------------------------------------- include resource to html ---------------------------------------*/

// must in html fro Scripts     <!-- inject:js --><!-- endinject -->
// must in html fro Css         <!-- inject:css --><!-- endinject -->

var inject = require("gulp-inject");
gulp.task('js_css_injector', function() {

    var options = {
        addRootSlash:false,
        transform: function (filepath, file, i, length) {
            var tag;

            if(filepath.indexOf('.css') != -1){
                tag = "<link rel='stylesheet' href='<filename>'>";
            }
            if(filepath.indexOf('.js') != -1){
                tag = "<script src='<filename>'></script>";
            }

            return tag.replace("<filename>",''+filepath+'?v='+VERSION);
        }
    };

    var resources;

    if(is_production){
        resources = ['dist/style.min.css','dist/script.min.js'];
    }else{
        resources = SCRIPTS_SRC.concat(STYLES_SRC);
    }


    gulp.src('./index.php')
        .pipe(inject(gulp.src(resources,{read: false}),options))
        .pipe(gulp.dest(""));
});

/* ------------------------------------- watch:scripts --------------------------------------------*/

gulp.task('injector_js_css_to_html:watch', function() {
    var files = SCRIPTS_SRC.concat(STYLES_SRC);
    gulp.watch(files,
        ['js_css_injector']
    );
});

/* ------------------------------------- default --------------------------------------------*/
gulp.task('default',[
    'sass',
    'js_css_injector',
    'injector_js_css_to_html:watch',
    'sass:watch'
]);