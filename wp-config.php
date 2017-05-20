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
define('DB_NAME', 'test-wp');

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
define('AUTH_KEY',         'IVa=lM+vXG_`J-c{xVs;}A&E=7Sc]NWWf!Ul</IYhbOup@2ezp vv~_KUcGLp0pO');
define('SECURE_AUTH_KEY',  'vru&yy{tps+;$|krGc@,5%O,$XdAfC[}%b+;9fQ0n(zZz};l#L/+OQ~&W._(z2(G');
define('LOGGED_IN_KEY',    '3|!sB[}e9l-=?c(=snMoN/@8UuTJsNfC_@fBQH~js|U_+Ov-C[PtOalEHcB?/W&?');
define('NONCE_KEY',        ',5AtA830bBQ81}g_`SVls@j%#liz=85q:+dHZDT)<<p3XfBe(-l.yAe`54<Q+N;u');
define('AUTH_SALT',        '3y-f?cq4lJ]YZvC@%_s]u-icIs-**4h #f0@%*.n=ezA~qY~ON-v4R2u0*?|QSs>');
define('SECURE_AUTH_SALT', '(>IA;<K[E~-,FkLZifg{C,EX!edpH5ebE6R4wg{[9L0&m gGq*#(QEOhY-wO^6~w');
define('LOGGED_IN_SALT',   'niT}?!eC/<qqlRX[#rv+~NL,#m eK_QueK1&9):#{80w*SkP/P T,igVO_*rEO*h');
define('NONCE_SALT',       '(N`:#N#yO~r8j*fE|p0?WsO58?VBgNJRt,g78%YDP%7FU?q}xAu,KVy%^]S,k`La');

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
