<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-b@]8* <i~YtWHAH_&[s^6,B[{:BL; ~:aVLI1f|x: 9(x)M3QJMcj+z$XI8##:M');
define('SECURE_AUTH_KEY',  'trw9M^Y,e3UA>zKn!8O;b>6z!2c*N&pi|v<Y?i!LI~.*7Ori|n-n!OhgEm`!7mB`');
define('LOGGED_IN_KEY',    '@B=e0X|ekaW;|Y+k|RD|jw@DR1MGmS~(fmX!ubUTXH:p]H/whxp-vl(dLbRx/#*d');
define('NONCE_KEY',        'on:B9I)*w0~q1w+)J_5I(-F|9&t^=U|@m*Ihy,H-7HE5H.(v?|,)Y<UKr:}AKT}L');
define('AUTH_SALT',        '.NPMEG3wt^+]|DqMjkAPs;R53Fu<i=&?}ab{KU@j}OTu:Ih|3l-5VYQ+g~TmtZ;9');
define('SECURE_AUTH_SALT', 'yoG[Tf!^4hahxF1lO~`xv$@?w,U,ys<*^W1Z0]|-jS8RaJ[ k;]aGN/-@8bYjqZn');
define('LOGGED_IN_SALT',   '0lh bAK5wX)RKY?aDdR8SIG+B|xVO-,0-<yDP |%`C-Wi&E|A.$ez3T1z`-zJSp-');
define('NONCE_SALT',       '.,qTcTVnHt+k:|lB|_2+<pyE<8tP)]>m|NN)oQxCAna|&d$?qw-#LA9-98S02^S7');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
