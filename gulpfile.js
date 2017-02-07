// load gulp
var gulp = require('gulp');


// load modules
var postcss = require('gulp-postcss');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('autoprefixer');
var clean = require('gulp-clean');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');


// clean dist/css folder
gulp.task('cleancss', function(){
	return gulp.src('/css', { read: false }).pipe(clean());
});


// less compilation
gulp.task('sass', ['cleancss'], function(){
	return gulp
		.src('./sass/main.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(sourcemaps.init())
		.pipe(postcss([autoprefixer()]))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('./css'))
		.pipe(browserSync.stream());
});


// watch for changes and act
gulp.task('watch', ['sass'], function(){

	browserSync.init({
		// set what files be served
		proxy: {
			target: "eshop.local:8888"
		},
		open: 'external',
		host: 'eshop.local',
		port: 3000,
		files: [
			'dist/**/*.css',
			'**/*.html'
		]
	});

	gulp.watch('sass/**/*.scss', ['sass']);
});


// the default task
gulp.task('default', ['watch']);
