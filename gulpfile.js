var gulp             = require('gulp'),
    sass             = require('gulp-sass'),
    browserSync      = require('browser-sync').create(),
    autoprefix       = require('gulp-autoprefixer'),
    watch            = require('gulp-watch'),
    uglify           = require('gulp-uglify'),
    pump             = require('pump'),
    rigger           = require('gulp-rigger'),
    cssmin           = require('gulp-minify-css'),
    imagemin         = require('gulp-imagemin'),
    pngquant         = require('imagemin-pngquant'),
    rimraf           = require('rimraf'),
    reload           = browserSync.reload,
    gnf              = require('gulp-npm-files'),
    rename           = require("gulp-rename");


var path = {
    js: {
        src: [
            './src/js/main.js',
            './node_modules/jquery/dist/jquery.min.js',
            './node_modules/tether/dist/js/tether.min.js',
            './node_modules/bootstrap/dist/js/bootstrap.min.js',
            './node_modules/owl.carousel/dist/owl.carousel.min.js'
        ],
        dest: './js'
    },
    watch: {
        js: 'src/js/*.js',
        style: 'src/style/**/**/*.scss',
        img: 'src/img/**/*.*',
        php: './**/*.php'
    }
};
    gulp.task('browser-sync', function() {
        browserSync.init({
            proxy: 'http://geekhub-exam:90/'
        });
    });
    gulp.task('js:build', function () {
        return gulp.src(path.js.src)
            .pipe(gulp.dest(path.js.dest))
            .pipe(reload({stream: true}));
    });
    gulp.task('style:build', function () {
        gulp.src('src/style/style.scss')
            .pipe(sass())
            .pipe(autoprefix({
                browsers: '> 5%',
                cascade: true
            }))
            .pipe(cssmin())
            .pipe(gulp.dest(''))
            .pipe(reload({stream: true}));
    });
    gulp.task('image:build', function () {
        gulp.src('src/img/**/*.*')
            .pipe(imagemin({
                progressive: true,
                svgoPlugins: [{removeViewBox: false}],
                use: [pngquant()],
                interlaced: true
            }))
            .pipe(gulp.dest('img/'))
            .pipe(reload({stream: true}));
    });
    gulp.task('watch', function(){
        watch([path.watch.php], function(event, cb) {
            browserSync.reload();
        });
        watch([path.watch.style], function(event, cb) {
            gulp.start('style:build');
        });
        watch([path.watch.js], function(event, cb) {
            gulp.start('js:build');
        });
        watch([path.watch.img], function(event, cb) {
            gulp.start('image:build');
        });
    });
    gulp.task('build', [
        'js:build',
        'style:build',
        'image:build'
    ]);
    gulp.task('clean', function (cb) {
        rimraf(path.clean, cb);
    });
    gulp.task('default', [ 'build', 'browser-sync', 'watch']);