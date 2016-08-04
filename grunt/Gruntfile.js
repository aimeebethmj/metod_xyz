module.exports = function(grunt) {
  "use strict";
 
  grunt.initConfig(
  {
    wordpressdeploy: {
      options: {
        backup_dir: "backups/",
        rsync_args: ['--verbose', '--progress', '-rlpt', '--compress', '--omit-dir-times', '--delete'],
        exclusions: ['Gruntfile.js', '.git/', 'tmp/*', 'backups/', 'wp-config.php', 'composer.json', 'composer.lock', 'README.md', '.gitignore', 'package.json', 'node_modules']
      },
      local: {
        "title": "local",
        "database": "database_name",
        "user": "database_username",
        "pass": "database_password",
        "host": "database_host",
        "url": "http://local_url",
        "path": "/local_path"
      },
      staging: {
        "title": "staging",
        "database": "database_name",
        "user": "database_username",
        "pass": "database_password",
        "host": "database_host",
        "url": "http://staging_url",
        "path": "/staging_path",
        "ssh_host": "user@staging_host"
      }
    },
    sass: {
      dist: {
        options: {
          style: 'expanded',
          lineNumbers: true
        },
        files: {
          '../css/main.css': '../_sass/sassy.scss'
        }
      }
    },
    watch: {
      livereload: {
        files: [
          '../_sass/*.scss'
        ],
        tasks: ['sass'],
        options: {
          livereload: true
        },
      },
    }
  });
 
  // Load tasks 
  grunt.loadNpmTasks('grunt-wordpress-deploy');
  grunt.loadNpmTasks('grunt-contrib-sass')
  grunt.loadNpmTasks('grunt-contrib-watch')
 
  // Register tasks 
  grunt.registerTask('default', ['watch']);
};