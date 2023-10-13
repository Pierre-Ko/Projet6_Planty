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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'yV=0J)w0jI{]Trjm69kC*Crp14>[X{]@yhNGmm6.4&4z/I1<0]Vg&X{jIppr9iBa' );
define( 'SECURE_AUTH_KEY',  'vq+`J%1{WShV!XDLs$6{4(y[?W:PXDG!:^dQs/YipDVl3&epPDyp:Uh?dBzbF6?O' );
define( 'LOGGED_IN_KEY',    'm;fyD %WxXgd^E+roA5<xm@cXkPC~,8tO`}VQa;{g&!CC~`o5za`We=qP5[JOXv;' );
define( 'NONCE_KEY',        'dTw3EsO?]Ph0-Yxw|Je=9(K)UKrvtOy]RPz$pA3traa%5F3Hhb!Xk`*-Y@u]S}Fz' );
define( 'AUTH_SALT',        '{<Euxh3sN(+Hq>NJ+`:MZo[XSh#bprDm&NHS/4Wv0eubR8prW<sNw6TfE@~piF2d' );
define( 'SECURE_AUTH_SALT', ')Q(&/.TOUAO|C/i7ROA2mB3we{|rq7R[ai5N4IplHLSXH>s(w&ojbN_5.d,70c@U' );
define( 'LOGGED_IN_SALT',   'LbA+:F!sl?G?vLIYLgBekJ-5d9T:O8u!`QP]&!0]BnU~t^xVbQEVfj(78X>bZB!T' );
define( 'NONCE_SALT',       '<{}cB>(3Zkr9O68_a%{A:74~^,HAcf5W4BEuDYN{W~M3OK8<7<;S+2^Pi,O}OcL&' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
