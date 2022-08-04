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
define( 'DB_NAME', 'dealwithDBzqqzf');

/** MySQL database username */
define( 'DB_USER', 'dealwithDBzqqzf');

/** MySQL database password */
define( 'DB_PASSWORD', 'iiL6h6QzW3');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'tWxHO+_vBVc>Qkr7Fr^MU^>bj7jrwCKd[8ks8Gz!NV![ck08k6iq6Dx*LS*#ah;5');
define( 'SECURE_AUTH_KEY', 'Dz7FrzMU^>Uc7jr7My^MUks8RZ|NV![Vk08ksFNz!NVLel#Sh;5hpDKw~Kd|:Zh:');
define( 'LOGGED_IN_KEY', 'm.Jv!NV>0Yg}FrzFN^>Uc>0DKw~Od[1dl8Gs-GO![Vd[a<;bi6DqxDL+_Sa#5hp5D');
define( 'NONCE_KEY', 'j^BnvIQ$,Qh:5hoCKw@KR!}Zc[BovCJae]6em9Ht+HZ#:ah59ls9G6EqyET*<Tb;6');
define( 'AUTH_SALT', '7Y^MU^>bj7jrIMy^M2il69t-HO+_Wd]1ds9Gs-{3fm3Mb<bi6DqxEL*#Ta<Y,}Y');
define( 'SECURE_AUTH_SALT', '{bqAIu$:4ho4Cv@JR@}Yg}4nvBFv@OS~#Sl19ltGOw~OW|:dh:*PX.{em2AmuHLx*');
define( 'LOGGED_IN_SALT', 'gBgnBIc$Jchp5Dp~KS~|Zh:4O-[Vd@KW.]We29S*#Hh;OW_1dl19QXq7Er*MT^<bi');
define( 'NONCE_SALT', ':w08ksFNz!Nc>0ck+_OW_]dl19l-GO-_Vd[1dl6EXyET*<Tb;6iq6Pe]2Smr7QY,}');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
