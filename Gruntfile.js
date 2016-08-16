module.exports = function (grunt) {
    grunt.initConfig({
        sass: {
            dev: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'css/main.css' : 'sass/main.scss'
                }   
            }
        },
        watch: {
            css: {
                files: 'sass/**/*.scss',
                tasks: ['sass']
            }
        }
    });
    
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
    grunt.registerTask('default', ['sass']);
}