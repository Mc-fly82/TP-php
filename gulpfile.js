var gulp        = require('gulp');
var browserSync = require('browser-sync').create();


// Browser-sync Task
gulp.task('browser-sync', function() {
  var files = [
  './**/*.**',
];

  browserSync.init(files, {
    proxy: 'http://localhost:8888',
    notify: false
  });
});

gulp.task('default', ['browser-sync']);