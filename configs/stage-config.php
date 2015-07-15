<?php

define( 'WP_LOCAL_DEV', false );
define('DB_NAME', 'SITENAME');
define('DB_USER', 'mysql_user_stage');
define('DB_PASSWORD', 'mysql_user_stage');
define('DB_HOST', 'localhost');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'wXFSTJOFzCdc_)+x=qs3l`r|4gcDcGfIP?{*[T?>]RoQDs/EVu.!.@J)E;[>pTp(');
define('SECURE_AUTH_KEY',  'gR*:;5OQNw[q9@vPK!RW#M8QyA]CI1c?Q+;IG>U;B=>,tqj3TwJ6+JYx5{|B$1g<');
define('LOGGED_IN_KEY',    'akwD)mXF6M-^CdtWAM3bLJwUYhEnxm-a2 G@Su48$jsM|5qeH+z?Mx1QwEY^qYE6');
define('NONCE_KEY',        'GIDBa?$!mB1XM>-r0&@pP%a/C$nd9~Dgij+L?@cn:4ARLK/^!9g1zr~ixJ|Y&F+U');
define('AUTH_SALT',        '@yd}+N~e9Dy]n/JA+iJ0LV&dw@3I*w (w*cJq,U^CXx&mIR+i1^jj{vkb=:}<t>Y');
define('SECURE_AUTH_SALT', ')tPLcQB.eBp|VY+jUl|]1N@_U#P$6IkUW$;BBJC*!:bY_k77&ZW$iAC9E{%dNJM{');
define('LOGGED_IN_SALT',   'M<iSOL-Ehl7p;ux`P+|h&=8V X=`fYp)F^dg{p472H|M.D=|bZU;#uhHGBNO3LkJ');
define('NONCE_SALT',       'lP*v>+PP MGw>!< Cd8Yhr-$fkGjphv9hvUi`w@~C6,J!E47~oH8. -Aw7.W_aY&');

$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
