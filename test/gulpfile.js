const gulp = require('gulp');
const amdOptimize = require("amd-optimize");
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const minjs = require('gulp-uglify');

gulp.task('rjs', function(){
    gulp.src('./src/js/*.js')
    .pipe(amdOptimize('index',{
        paths: {
            'index': './index',
            'http': './httpclient',
            'jquery': './jquery'
        }
    }))
    .pipe(concat('index.js'))
    .pipe(gulp.dest('./dist'))
    .pipe(rename('index.min.js'))
    .pipe(minjs())
    .pipe(gulp.dest('./dist'));
})

gulp.task('auto',function(){
    gulp.watch('./src/*.html',function(){
        connect.reload();
    })
})