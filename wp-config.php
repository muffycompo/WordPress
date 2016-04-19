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
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('WORDPRESS_DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));

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
define('AUTH_KEY',         'J?J{HSs,No,y[#c4u:cAv?eete.:?CRegK8;x7myQNJqkSsa*:C$SW;[G3NV5,Is');
define('SECURE_AUTH_KEY',  'vS?D>RP,[!$v*i33K%}2ez8d)px#!WtV|(sD WoL7/?l&[mzt)lMO*;9&J]Pqs0=');
define('LOGGED_IN_KEY',    '6x;8<EDy0*KG&XmYB38,<Ib.nyOGbL>Q+B&vp7GE;^>DXH+-O-g]l|y7+xd%<{P-');
define('NONCE_KEY',        'y=^f+[-_R+F.(7&KLH$-)hUfHoSIp8$Yj5{30Eh#rUs&tF?5ahwo5~vWPJe<&72$');
define('AUTH_SALT',        'K)2VRY^5R&0;B~Zy;hTXsT}jZi^QAdB+${-4n>>sp|Bf):r2xs5S^![>qapz^A?O');
define('SECURE_AUTH_SALT', 'dk&CCdlX8=h- {>SL2|J)B#7/+ih54|e-wnG`$Jg/O$Lgu{~:Fl*]ne({rpT^?sU');
define('LOGGED_IN_SALT',   'Zmq;[l{vB/lc|<bUqPnj%e>`O<1w3GzpGY3(arlHS.c+k?{FI?`n!B.jouJ=+Q !');
define('NONCE_SALT',       '4mcIY2qO:JDQ7/ Zc ax]i)fXwy)n ji7ps0^I3Qv.)%(Z1)Nm{pL4or[.FIMjep');

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
