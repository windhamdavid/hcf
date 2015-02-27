module.exports = function(grunt) {
	
	grunt.initConfig({
	  pkg: grunt.file.readJSON('package.json'),
		
		cssmin: {
		  css: {
			  src: 'style.min.css',
			  dest: 'css.css'
		  }
		},
		
		cssmin: {
		  combine: {
		    files: {
		     'style.min.css': ['css/bootstrap.css', 'css/font-awesome.css', 'css/animate.css', 'style.css']
		    }
		  }
		},
		
		concat: {
			options: {
				separator: ';',
			},
			dist: {
				src: ['js/jquery-2.1.3.min.js', 'js/bootstrap.min.js'],
				dest: 'js/jboot.js',
			},
			disto: {
				src: ['js/scripts.js', 'js/init.js'],
				dest: 'js/script.js',
			}
		},
		
		uglify: {
		    my_target: {
		      files: {
		      'js/script.min.js': ['js/script.js'],
				'js/jboot.min.js': ['js/jboot.js']
		      }
		    }
		  }
		  
	});
	
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	
	grunt.registerTask('js', [ 'jshint' ]);
	grunt.registerTask('default', [ 'cssmin', 'concat', 'uglify' ]);

};