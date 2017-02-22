// Load Our Dependancies
var gulp         = require('gulp'),
    sass         = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss    = require('gulp-minify-css'),
    jshint       = require('gulp-jshint'),
    uglify       = require('gulp-uglify'),
    imagemin     = require('gulp-imagemin'),
    rename       = require('gulp-rename'),
    concat       = require('gulp-concat'),
    cache        = require('gulp-cache'),
    notify       = require('gulp-notify'),
	del          = require('del');


// Process our Sass Files
gulp.task('sass-frontend', function() {
	return sass('assets/scss/style.scss', { style: 'expanded' })
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
		.pipe(minifycss())
		.pipe(gulp.dest('dist/css'))
		.pipe(notify({ message: 'SASS [Frontend] completed' }));
});

gulp.task('sass-wp-editor', function() {
	return sass('assets/scss/wp-editor.scss', { style: 'expanded' })
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
		.pipe(minifycss())
		.pipe(gulp.dest('dist/css'))
		.pipe(notify({ message: 'SASS [WP Editor] completed' }));
});


// Scripts
gulp.task('scripts', function() {
	return gulp.src([
		'assets/js/scripts.js',
	])
		.pipe(concat('scripts.js'))
		.pipe(jshint())
		.pipe(uglify())
		.pipe(gulp.dest('dist/js'))
		.pipe(notify({ message: 'Scripts completed' }));
});


// Compress Images
gulp.task('images', function() {
	return gulp.src('assets/images/**/*')
		.pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
		.pipe(gulp.dest('dist/images'))
		.pipe(notify({ message: 'Image compression completed' }));
});


// Set default task order
gulp.task('default', function() {
	gulp.start( 'sass-frontend', 'sass-wp-editor', 'scripts', 'images', 'watch' );
});


// Watch for changing files
gulp.task('watch', function() {
    // Watch Sass partials files
	gulp.watch('assets/scss/*.scss', ['sass-frontend']);

	// Watch JS files
	gulp.watch('assets/js/*.js', ['scripts']);

	// Watch image files
	gulp.watch('assets/images/*', ['images']);

});