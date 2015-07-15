module.exports = function(grunt) {
  "use strict";

  grunt.initConfig({
    wordpressdeploy: {
      options: {
        backup_dir: "backups/",
        rsync_args: ['--verbose', '--progress', '-rlpt', '--compress', '--omit-dir-times', '--delete'],
        exclusions: ['Gruntfile.js', '.git/', 'tmp/*', 'backups/', 'local-config.php', 'composer.json', 'composer.lock', 'README.md', '.gitignore', 'package.json', 'node_modules']
      },
      local: {
        "title": "local",
        "database": "SITENAME",
        "user": "wp",
        "pass": "wp",
        "host": "localhost",
        "url": "http://SITENAME.dev",
        "path": "/srv/www/SITENAME/htdocs/"//Trailing slash is super important here.
      },
      staging: {//Also known to us as Devshed
        "title": "staging",
        "database": "SITENAME",//We have to set this up manually since our host doesn't have an API
        "user": "mysql_user_stage",
        "pass": "mysql_pass_stage",
        "host": "localhost",
        "url": "http://site.com/stage/SITENAME",
        "path": "/home/user/stage/SITENAME/",
        "ssh_host": "stageuser@site.com"
      },
      production: {
        "title": "production",
        "database": "prod",
        "user": "prod",
        "pass": "prod",
        "host": "prod",
        "url": "http://prod.com.dev",
        "path": "/home/prod/webapps/site/",
        "ssh_host": "user@prod.com.dev"
      }
    },
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-wordpress-deploy');

  // Register tasks
  grunt.registerTask('default', [
    'wordpressdeploy'
  ]);

};
