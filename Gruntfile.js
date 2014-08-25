module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        url: {
            components: {
                dist: "app/templates",
                file: "app/static/jade/components",

                list: {
                    dist: "app/templates",
                    file: "app/static/jade/components"
                },

                account: {
                    dist: "app/templates",
                    file: "app/static/jade/components"
                },

                article: {
                    dist: "app/templates",
                    file: "app/static/jade/components"
                }
            }
        },

        jade: {
            compile: {
                options: {
                    pretty: true,
                    data: {
                        debug: true,
                        timestamp: "<%= grunt.template.today() %>"
                    }
                },

                files: {
                    "app/index.html": "app/static/jade/index.jade",
                    "<%= url.components.dist %>/header.html": "<%= url.components.file %>/header.jade",
                    "<%= url.components.dist %>/footer.html": "<%= url.components.file %>/footer.jade",
                    "<%= url.components.dist %>/body.html": "<%= url.components.file %>/body.jade"
                }
            }
        },

        livescript: {
            src: {
                files: {
                    'app/static/js/ispeech-livescript.js': 'app/static/ls/ispeech-livescript.ls', // 1:1 compile
                    'static/js/another.js': ['static/ls/*.ls'] // compile and concat into single file
                }
            }
        },

        compass: {
            dist: {
                options: {
                    sassDir: 'app/static/sass',
                    cssDir: 'app/static/css',
                    noLineComments: false
                }
            }
        },

        uglify: {
          options: {
            banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
          },
          dist: {
            files: {
              'dist/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
            }
          }
        },

        watch: {
            css: {
                files: ['app/static/sass/*.scss'],
                tasks: ['compass'],
                options: {
                  livereload: true,
                }
            },

            js: {
                files: 'app/static/ls/*.ls',
                tasks: ['livescript']
            },

            html: {
                files: ['app/static/jade/*.jade','app/static/jade/components/*.jade'],
                tasks: ['jade']
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-jade');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-livescript');

    grunt.registerTask('default', ['watch']);

};