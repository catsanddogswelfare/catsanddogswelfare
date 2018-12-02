<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'welfaredb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w+O9;3RSSDvVE/IP^!jBr/8)&!{kzR_?gx(I7(!F=)C|%M#,WIim]m;+}-_wr![!');
define('SECURE_AUTH_KEY',  'Yo|kIbH>`uG7-[:C|YJtsW0}:^|_V<rWfDL|+&!,k0S%/aW+pd^qDj.dh%PuZL{E');
define('LOGGED_IN_KEY',    'N.!4`ZY2=<{c:{q)7AP}6XxpI,xKYR&d]m+qA+0JaJmGVz7-}&UG^O>k,*6!V:(A');
define('NONCE_KEY',        '&(xGI!ej_)fI5Z_0a3Ma!k3MP$-qnLE*Y+N:g_T9jib3/Z Ghu2Z(So^(q}WxGyT');
define('AUTH_SALT',        '~0h;Y-gM4s+jng/7_>,@?;R:AjVn_MMz}CziT,](Pr-G^cX@hmq(,zn6sH:mV Y;');
define('SECURE_AUTH_SALT', 'EObL%)U;(o29!*}bieP;2nu4Ze^|`aBeSi`xcx24s>a5;AXlpt0BjdT=jdC$l{M-');
define('LOGGED_IN_SALT',   'C8|j(({4MGD{Z_l|znbpS]q5of=^Fq6DlGcVu-:dR(ut4]p:|#ja*;?mj#C,yyAA');
define('NONCE_SALT',       'Iw*M+uQ}L=r^-O$Wl5glk{Rm(Y+do4Kekp;L{;Jgx7qK3-`.:FBb1yar8M~0b$O9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
