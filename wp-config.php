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
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'D9KA0=Y0eViA#1Mlo8`M@$et;R?JWXfrKl2l-,O_f~er%xjpS,2v7iFGX,JXJt=W' );
define( 'SECURE_AUTH_KEY',  '_66z~pOL+V<Ew*OFE9)GrH|}RtClLoWhOO.C4WTNfk]iX&_Ml?{RO4e_$o1jf*jO' );
define( 'LOGGED_IN_KEY',    'Y!al!Kwo$e[@:^prM+a39.QTT g1/~qy*@-bBR7zw#ldxB~YU.)#NZPJWD5L[?Y>' );
define( 'NONCE_KEY',        'V.fz[[kx7y&{_4BQL#4D&PGw=wA}riL8ce)Ga!x{MkGxn/}E047PF2j6u`W%&|!l' );
define( 'AUTH_SALT',        '2Jy^a_S1^r}5gvwMv2_5,B%{o;V;r04;V~)W[k  7/XjkSQ$/R? g70D|,Z=Q/U_' );
define( 'SECURE_AUTH_SALT', 'PD#cACt1dhaoGgo8E$)15ZcqlKUP;>lrlCbF0LUV1D00&]3VRHR :]k}cP^Jwiuk' );
define( 'LOGGED_IN_SALT',   '*mhT}<zU1[^8lyli.v[leeM@WRR6}Q)8:|_Fl)i,dAGvgefJq]2zB}Bt.y,o#k+ ' );
define( 'NONCE_SALT',       '*LRA2mnk0.yR7}V[+;P+X {hF#l5fz13PNme$Q+oC}HzC!$.-(zYA2<h=Z3,{|R2' );

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
