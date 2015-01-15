module.exports = function(grunt) {

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        less: {
            default: {
                options: {
                    paths: ["res/less"]
                },
                files: [{
                    expand: true, cwd: 'res/less/', src: ['**/*.less'], dest: 'public/css/', ext: '.css'
                }]
            }
        },

        cssmin: {
            default: {
                files: [{
                    expand: true, cwd: 'public/css', src: ['*.css', '!*.min.css'], dest: 'public/css', ext: '.min.css'
                }]
            }
        }
    });

    // Default task(s).
    grunt.registerTask('default', ['less', 'cssmin']);

};
