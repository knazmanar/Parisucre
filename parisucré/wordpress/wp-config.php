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
define( 'DB_NAME', 'parisucré' );

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
define( 'AUTH_KEY',         'DD+*3ZdLIZBh:BCZx_Il|D1jFWnE[R%$T;FV!a`Ni(2Z,:N&=yQcl+ycHy|PtLoC' );
define( 'SECURE_AUTH_KEY',  'I|1tNw,8S89L@^6Ek:KBdc~Dj_sd:]@k.^z]pvZTb/Nb=#p6wGcsQ)BT5ykPTlX/' );
define( 'LOGGED_IN_KEY',    'eU.1zD.bQo:?rL&nqW(3v-i(Y[:0#px3Ys]IpcvYGN5jN??uvHd=4ax4GojV&fI ' );
define( 'NONCE_KEY',        '*u:Vr)`w4MV}MDx2|IfX>)OE9 :2pyeys.qBj-sC60*B[$FpXd($g,ctmg@8z^,b' );
define( 'AUTH_SALT',        'jXthr/$tjfDcRvl;CEx^HdzH2gwC;y.Gt0xZNW@O0kZnC9,`X0qlx|VTGr]N)q]#' );
define( 'SECURE_AUTH_SALT', '#_o8mW<GJ{Bq%RFW3l%<D`R/:kOUNcp|T~`LR,Cgj~-_qnZ|P~y|G$N93Pf@yr$Y' );
define( 'LOGGED_IN_SALT',   '#w{]a_zk!>E,|7U3_`,0@wjrcp*3Z^tZRTXQ0IXe _q6baL{KgGx|!mS;4p9*D7t' );
define( 'NONCE_SALT',       '{5Kvp{#r?.oj-Q0=Hy^SWl^@27mp|*-HAlXPq >gG<mg@ovENf~PJMDRXZP|M7o5' );

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
