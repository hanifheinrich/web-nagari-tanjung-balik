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
define( 'DB_NAME', 'db_tjbalik' );

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
define( 'AUTH_KEY',         'C|lD;e@EWKw|>}@l}bF*ylE%~0WP>%syM=nBNOj#/8Rt<:v*dOp9:=CgtuP?XFqm' );
define( 'SECURE_AUTH_KEY',  'zT21y;`qZh2ahGDInIzu8>u3ZR17l}bixg;bb!<=%16 4k>zMU!t}q/OVJbH$Sv*' );
define( 'LOGGED_IN_KEY',    'dNEyE)?xva~TwGmxn6%o0c3*>W+EtslrorVKkSk+D6(#9xY! KOM-CuQ7%GGDvgq' );
define( 'NONCE_KEY',        '#PY9{*`)|zq+)Qq UriM$3N4$&a*2`hH&?XGD`U_zt+cF^/0|oF x4a_]+z/4*CX' );
define( 'AUTH_SALT',        'AAk@OqWSg!Pi0I?Z5Sm)!&_>g|P}k= vLY!a@cy+HV#dvuBw5Kml3sJ>Fxt_yShG' );
define( 'SECURE_AUTH_SALT', 'zBsjoV_1>(ea*ecE,`)L +Yv1N-Inau[_1ECUC qQZhEk5GLKS=ORT88ya}QA.;R' );
define( 'LOGGED_IN_SALT',   '_Hv~!D9}G d^vO|zM?adxYDEH}e;kZ/BMIBx(jGRP,Noi1)=[H%oFi~wd$xcOyS;' );
define( 'NONCE_SALT',       'W Mmen JVv@U2g2)auV{`u^?O:H)[}-~Ej^[JS(3CbeICaTr5h}< y#*.%b7k4s#' );

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
