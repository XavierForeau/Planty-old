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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'eaF&%*|;~39WHx>K}@tE-ky_qEn-49Dqt:=:1Sp3>LSd40hre$(c253|x-?xh2M^' );
define( 'SECURE_AUTH_KEY',   ')KYQmOk7I~1k.+.iV$Z,5a+<.R~4oC{RH2DkGrhL6mE7_-L;Z{f)#;bayLmgP9a*' );
define( 'LOGGED_IN_KEY',     'rq!$yVy-.^N5JZb2kf*d;_7Qcen}U=.=&4%dl=Wk#@1SjN.PyOHlZ832 %}tFGgl' );
define( 'NONCE_KEY',         'mx)&=VH#wQ22>vq~3ubu*kp]F%*6c.q@4Vyo7r~<,?4IMzn,o<1{dBZ4GQ_$XpQH' );
define( 'AUTH_SALT',         'jQM?&,{09+z[Tkp4=|(Doagy7]s2;F4x;#m)P396g6u<!,W,0k)7/D0CY!A0yGv-' );
define( 'SECURE_AUTH_SALT',  '3*zn:W?Ribz*P//2H{3z6WWEO9>SkVj0< %s`JhmeH;/stv/mIK[UiK4EG0;(t#{' );
define( 'LOGGED_IN_SALT',    '%t5yom]7a3JC--d:j7%Cr0: XQn8vCU5QoC+FNJ|~id$+{Yn/[A+!y|Xm&c*;.&K' );
define( 'NONCE_SALT',        '5cEJ;y=9.pmH43cFRl[kc*l58|z0Q+_WNQMP?;G=4OY!epI{j|<B56<F/KI,=;p{' );
define( 'WP_CACHE_KEY_SALT', ')5vM_-=NoRSNu~RP/8^$TQZcNXHqB,b)A/)R1.]Z{-+:N*QEM,Z/A%c$C/-Qcxcz' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
