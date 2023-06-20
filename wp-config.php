<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maformationwordpress' );

/** Database username */
define( 'DB_USER', 'dimitri' );

/** Database password */
define( 'DB_PASSWORD', 'Dimdaph!0' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'n/7o=w$n#RpAcu;$f*OR9p%{>4qBix1s{-FA=^N:1On:jcAW*ENYW3+9?ai)*%L+' );
define( 'SECURE_AUTH_KEY',  'm({YNuX;):abo:b(G$D!`OB_qy`Mbwo8|afez}.U!&FBU#(C{8VoRPvus[4/V+.t' );
define( 'LOGGED_IN_KEY',    'CP2twlPP@{2{UzvYf?x?z-AeKV3DgW<@H6|+0O+c[MGM|+~D,$.8D?P{+b6{o,V|' );
define( 'NONCE_KEY',        'zo;BdAw!szpQ,!4aaqF[&Ze!UZkpQz%5.fGhJC^ Ht}aBW/02XUBw&{d1hdB1*u%' );
define( 'AUTH_SALT',        'ySGPr{U=6(sg@}I:H<ky[X(%,>C?2~kuAN|1=qtyu$`r/-PlU-Xzfys%|]prOq6u' );
define( 'SECURE_AUTH_SALT', 'Xkb f!)V^yHcKFTt4rZ y-mcwE]7UAF6r.~rZ|Y7`0b;i:n@igd.EQ=qI)fGn8;<' );
define( 'LOGGED_IN_SALT',   'Y=(QMvC6$1Jxb4 bigl*wZ%}8or1d:DpR4WXrOWNo#Eqf$q/%-p|Tn/J)q<*wL]W' );
define( 'NONCE_SALT',       'IOy-+8^EoBJ%~bGeFj-xTtn2+BYWsJ(K`{{RgL3z~6,FnZwjW^Ss~kHINo0:1@>&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
