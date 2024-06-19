<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '}IVsyG%~rO0%$MLCM%A%9,,~Z#o%BN?6lR!|Q]N8eNB9-/zDT>]I:GPm%_6@>Xi^' );
define( 'SECURE_AUTH_KEY',  ' qVT{Vb)KPwJWKt6qIo)L&~<_ar67l#VaR5_,mgjaArf*-:r)MPI%Zg];XA &?{#' );
define( 'LOGGED_IN_KEY',    'd%t oIF}Jqgv_3G1>kz- /LW2V`US0XWcNy<|Zo;Z^5$e4}J.F{ajzk%,VMujcGF' );
define( 'NONCE_KEY',        '*`:ZorR~(*v)4X03kR<P]LRrZ |O?jPk IaPiT!#ts-;t#kx3aGa0akc?Z|C`iKj' );
define( 'AUTH_SALT',        'b%ggqmB~)&/!u+Px[m?MwKjwhM+^%f&#bAD=ZQG ^l:AZix#4qAbb#Etn4m3a.?p' );
define( 'SECURE_AUTH_SALT', 'YACDt_:0;g;c/:}jVMCU8avsl]IXfka4ML7mcxRJ71uFfRJ#(:s2QP-6Zyn![frX' );
define( 'LOGGED_IN_SALT',   ' }nyE@iRZ4$=&TTwnP}Z1=6C8Odo>M0sH,G<Y=G*cEn_CMF[J!DbD!;|32SseaQN' );
define( 'NONCE_SALT',       'HNoCGX3JJ(bR|u/Oxm)Ff(`m;q#~M3A;##+34I[!/0kDB[}MXd{ Nslh$/9ToKVG' );

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
