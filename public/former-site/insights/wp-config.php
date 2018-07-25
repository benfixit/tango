<?php
define('WP_AUTO_UPDATE_CORE', false);// This setting was defined by WordPress Toolkit to prevent WordPress auto-updates. Do not change it to avoid conflicts with the WordPress Toolkit auto-updates feature.
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
define('DB_NAME', 'wordpress_0');

/** MySQL database username */
define('DB_USER', 'wordpress_4');

/** MySQL database password */
define('DB_PASSWORD', 'gtotoyi1000%##');

/** MySQL hostname */
define('DB_HOST', '10.99.0.11:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '01XA|5x:DH!)N0_4|76yLG:]37#[~&%(89C!4GkU8l/qfx!Um6314J5t_Z9K+1|k');
define('SECURE_AUTH_KEY', 's#8Q37]84@5t[0Uj7o*~48wrm6nBqa;1Q~v*;2@%(]N]!*N@W62~]4IO25h0&JG4');
define('LOGGED_IN_KEY', '2t2Vv0__X&6p7e%JT_!*#:SUB1Mi6[w~T~HrQiLvBRm2]a2~2]p&;_*Z)Tj8d(:#');
define('NONCE_KEY', '/GAm8]WoFNso%7Tb#N0wHW3z0V-i-4191+U@DmM5%x@D21D+_/FT~K)Y/hEpf1[q');
define('AUTH_SALT', '5iVO8_gUOi(ah9xjy9avfA+t4663)25&8@!l[@|:6d7cBc:5#RT0U9P~ibi3OB5&');
define('SECURE_AUTH_SALT', '6j48[1A+~(w/5xd4|-tqx[[hU8-L+)HQU;4*~wHL*9I-8K8@who](3J15ehatZ%u');
define('LOGGED_IN_SALT', 'z3*n7Y~ej)UZ-NqlXy~6k|Iv4ME6767E95pwPm1J!/:16/S18M5@0:K0tiWB4KDT');
define('NONCE_SALT', 'IbkZmAg_7B-M|SY4gBkUk;U0BVdE(i]LShH-J19VD4y0/TBG39B3iI1+U8YX]728');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'UrF5PQ25P_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
