module.exports = function(grunt) {

	require('load-grunt-tasks')(grunt, {scope: 'devDependencies'});

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		sass: {
			options: {
				sourceMap: false,
				outputStyle: 'expanded',
			},
			dist: {
				files: {
					'assets/css/silverclean.dev.css': 'assets/scss/silverclean.scss',
					'assets/css/silverclean-unresponsive.dev.css': 'assets/scss/silverclean-unresponsive.scss',
				}
			}
		},

		postcss: {
			options: {
				processors: [
					require('autoprefixer')({browsers: 'last 2 versions'}),
				]
			},
			dist: {
				src: 'assets/css/*.dev.css'
			}
		},

		csscomb: {
			dist: {
				options: {
					config: 'assets/css/csscomb.json'
				},
				files: {
					'css/silverclean.dev.css': 'assets/css/silverclean.dev.css',
					'css/silverclean-unresponsive.dev.css': 'assets/css/silverclean-unresponsive.dev.css',
				}
			}
		},

		cssmin: {
			options: {
				shorthandCompacting: false,
				roundingPrecision: -1
			},
			target: {
				files: {
					'css/silverclean.min.css': 'css/silverclean.dev.css',
					'css/silverclean-unresponsive.min.css': 'css/silverclean-unresponsive.dev.css',
				}
			}
		},

		clean: ['assets/css/*.css'],

		jshint: {
			files: ['Gruntfile.js', 'assets/js/silverclean.js'],
			options: {
				globals: {
					jQuery: true
				}
			}
		},

		concat: {
		 options: {
			separator: '\n\n',
		 },
		 dist: {
			src: [
				'assets/js/silverclean.js',
				'assets/js/superfish.js',
			],
			dest: 'js/silverclean.dev.js',
		 },
		},

		uglify: {
			build: {
				src: 'js/silverclean.dev.js',
				dest: 'js/silverclean.min.js'
			}
		},

		makepot: {
			target: {
				options: {
					domainPath: '/languages/',
					potFilename: 'silverclean-lite.pot',
					type: 'wp-theme'
				}
			}
		},

		watch: {
				scss: {
						files: ['assets/scss/*.scss'],
						tasks: ['sass', 'postcss', 'csscomb', 'cssmin', 'clean'],
						options: {
							interrupt: true,
						},
					},
				js: {
						files: ['assets/js/*.js'],
						tasks: ['jshint', 'concat', 'uglify'],
						options: {
							interrupt: true,
						},
					},
				pot: {
						files: ['*.php', '**/*.php', '**/**/*.php'],
						tasks: ['makepot'],
						options: {
							interrupt: true,
						},
					}
		},


});

grunt.registerTask('default', ['sass', 'postcss', 'csscomb', 'cssmin', 'clean', 'jshint', 'concat', 'uglify', 'makepot']);

};
