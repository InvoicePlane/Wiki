'use strict';
module.exports = function (grunt) {

  // Load grunt tasks automatically
  require('load-grunt-tasks')(grunt);
  const sass = require('node-sass');

  // MODULES

  grunt.config('clean', {
    basic: [
      'public/assets/build/*.css', 'public/assets/build/*.css.map',
      'public/assets/build/*.js',
      'public/assets/fonts/*', '!public/assets/fonts/.gitignore' // Fonts
    ]
  });

  grunt.config('sass', {
    dev: {
      options: {
        implementation: sass,
        outputStyle: 'extended',
        sourceMap: true
      },
      files: {
        'public/assets/build/app.css': 'resources/assets/sass/app.scss'
      }
    },
    build: {
      options: {
        implementation: sass,
        outputStyle: 'compressed'
      },
      files: {
        'public/assets/build/app.css': 'resources/assets/sass/app.scss'
      }
    }
  });

  grunt.config('postcss', {
    dev: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')()
        ]
      },
      src: [
        'public/assets/build/*.css'
      ]
    },
    build: {
      options: {
        map: false,
        processors: [
          require('autoprefixer')()
        ]
      },
      src: [
        'public/assets/build/*.css'
      ]
    }
  });

  grunt.config('concat', {
    dependencies: {
      src: [
        'node_modules/jquery/dist/jquery.js',
        'node_modules/popper.js/dist/umd/popper.js',
        'node_modules/bootstrap/dist/js/bootstrap.js',
        'node_modules/lightbox2/dist/js/lightbox.js'
      ],
      dest: 'public/assets/build/dependencies.js'
    },
    devjs: {
      src: ['resources/assets/js/app.js'],
      dest: 'public/assets/build/app.js'
    }
  });

  grunt.config('uglify', {
    build: {
      files: {
        'public/assets/build/dependencies.min.js': ['public/assets/build/dependencies.js'],
        'public/assets/build/app.min.js': ['resources/assets/js/app.js']
      }
    }
  });

  grunt.config('copy', {
    fontawesome: {
      expand: true,
      flatten: true,
      src: ['node_modules/font-awesome/fonts/*'],
      dest: 'public/assets/fonts'
    },
    devjs: {
      files: [{
        cwd: 'public/assets/build/',
        src: ['*.js'],
        dest: 'public/assets/build/',
        expand: true,
        rename: function (dest, src) {
          return (dest + src).replace('.js', '.min.js');
        }
      }]
    }
  });

  grunt.config('watch', {
    sass: {
      files: 'resources/assets/sass/**/*.scss',
      tasks: ['sass:dev', 'postcss:dev']
    },
    js: {
      files: 'resources/assets/js/*.js',
      tasks: ['uglify']
    }
  });

  // TASKS

  grunt.registerTask('default', 'dev');

  grunt.registerTask('dev', [
    'clean:basic',
    'sass:dev',
    'postcss:dev',
    'concat:dependencies',
    'concat:devjs',
    'copy:fontawesome',
    'copy:devjs',
    'watch'
  ]);

  grunt.registerTask('build', [
    'clean:basic',
    'sass:build',
    'postcss:build',
    'concat:dependencies',
    'uglify:build',
    'copy:fontawesome'
  ]);
};
