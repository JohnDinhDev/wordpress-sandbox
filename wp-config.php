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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SendPie44544541!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cZIxay1~[A=rVRET>O[|S;]n:NBq8e Mx$}t(aE0.g{o09S,Yp7/$sdZ#7=HWpS*' );
define( 'SECURE_AUTH_KEY',  'BnX3[Q0 CL[|{%cZ9x2P^m9cg?)7%2Lj7d(GZQ&$rmrRCoJTk4TI@P@mL6U51w5D' );
define( 'LOGGED_IN_KEY',    '::}L5]o=&!^40+;()!$xgsAei+/8<]]$Di6$Tz;n.ghg;$zzYsVrs!7J*>ion/ru' );
define( 'NONCE_KEY',        'bx~q]j[|3^W41KiRN`zRk.,%~6cTU`P[wnF8yozc<94OoPe?e`{5X@~cw2qDI^dr' );
define( 'AUTH_SALT',        'Myyr6(eh>Mr1K<{KGI|;qdsPhhAbR7AFyGv@o$#m0:AdG@cemXCe1v:0[SG&x$Cd' );
define( 'SECURE_AUTH_SALT', 'V>Xlo,>@^g?-flH`WE !TPb&v(&kP)8&MDs2%Xtt<^gJ:95DTG-G dU[yyYe=cR`' );
define( 'LOGGED_IN_SALT',   '(2K%(H~sIX)dzfXp*29*jf_W6hMl&^NVNrAuYhN*,Yo807L3uFR56czC[5NeiF0p' );
define( 'NONCE_SALT',       'CW<Qqt6;:LU1KY3#C4Eo>U0JaaK=+yBn;{:YD%4+G7T@i[S0A[MKkEF]UPu^vD{l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
