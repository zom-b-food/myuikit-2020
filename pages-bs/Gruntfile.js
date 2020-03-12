module.exports = function (grunt) {

    "use strict";
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        cssc: {
            build: {
                options: {
                    sortSelectors: true,
                    lineBreaks: true,
                    sortDeclarations: true,
                    consolidateViaDeclarations: false,
                    consolidateViaSelectors: false,
                    consolidateMediaQueries: false
                },
                files: {
                    'pages-bs/assets-bs/css/un-minimized-core.css': 'pages-bs/assets-bs/css/un-minimized-core.css'
                }
            }
        },

        cssmin: {
            build: {
                src: 'pages-bs/assets-bs/css/un-minimized-core.css',
                dest: 'pages-bs/assets-bs/compiled/<%= pkg.name %>.min.css'
            }
        },

        sass: {
            build: {
                files: {
                    'pages-bs/assets-bs/css/un-minimized-core.css': 'pages-bs/assets-bs/sass/site.scss',
                    'pages-bs/assets-bs/css/custom.css': 'pages-bs/assets-bs/sass/custom.scss'
                    /*  not included in pgk.name.min.css  (not global enough) build these separately--not included in globals.jsp */
                    /*'pages-bs/assets-bs/css/components/tabs.css': 'pages-bs/assets-bs/sass/components/tabs.scss'*/
                    /*'pages-bs/assets-bs/css/components/amslides.css': 'pages-bs/assets-bs/sass/components/amslides.scss'*/

                }
            }
        },

        watch: {

            js: {
                files: ['pages-bs/assets-bs/js/<%= pkg.name %>.js'],
                tasks: ['uglify']
            },
            css: {
                files: ['pages-bs/assets-bs/sass/**/*.scss'],
                tasks: ['buildcss']
            },
            livereload: {
                files: ['*.php', 'pages-bs/assets-bs/css/*.css', 'pages-bs/assets-bs/js/*.js'],
                options: {
                    livereload: true
                }
            }
        },

        uglify: {
            build: {
                files: {
                    'pages-bs/assets-bs/compiled/<%= pkg.name %>.min.js': [
                        'pages-bs/assets-bs/js/site.js'


                    ]
                }
            }
        }

    });


    // These plugins provide necessary tasks.
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-cssc');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['sass', 'uglify', 'cssc', 'cssmin', 'watch']);
    grunt.registerTask('buildcss', ['sass', 'cssc', 'cssmin']);

};
