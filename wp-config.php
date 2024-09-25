<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'ecommercedb' );

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
define( 'AUTH_KEY',         'syjS?SX4LwOVMGS9Tlk68tw~`]r!%7=vb)N_[4`Tf1y6N~$Vm.6f7UIZHH}R+oU,' );
define( 'SECURE_AUTH_KEY',  'W}STA1&Gy@+JsZb*:]PyMFlFy)[)(90vSgfi:yR62$PE!uB;2b~aI][0}$o$,)h(' );
define( 'LOGGED_IN_KEY',    'Paj.]yN-bmH kv0y0Z<(X,izd`cxp&Fy(KNbf}*+iG!:95g],=4c)KxaV=}Zjb~/' );
define( 'NONCE_KEY',        '9)~mJ($lcnUrW=E$*gF<xy`D/uF50b:3t$hrDpP&m7^V06z>jss`t`7;)i ujn{o' );
define( 'AUTH_SALT',        '=(r9ON24h+jF`=G.!@n?eUY{dVu_z%VL}C5>2&o)4WfBR=4T5E2SDimo~w/2GZKP' );
define( 'SECURE_AUTH_SALT', '},))5K.oL2omKI#Bv_C6YegNWtBw[yYi=+Xj&Gggd+`A37rq680ET,xnnWKojQXW' );
define( 'LOGGED_IN_SALT',   '4HN]<rT(=jB]*:?^jkY|(v}/Gk_QiU6TB[_%h!whDWxzu^`j`%=JPI~o7mjE=K`-' );
define( 'NONCE_SALT',       'Ye}d. wLhu{ /R}~B*]e~F!iWeh->`;lr*RpVy{F<X`x^iL7]Jwsmq K@ =HSjY;' );

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
