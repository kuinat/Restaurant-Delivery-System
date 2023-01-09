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
define( 'DB_NAME', 'delivery_system_database' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '6Y:6N8,1y_*Gdu-@RvFGE|)+wuh.SDy7~uJ.T*/yNE*E7lG=fR.fpKZb=2tj+T a' );
define( 'SECURE_AUTH_KEY',  'me<_,@]y?&krq 18/X+]K!Bic=u~w1T-s@Fb|P>&VddqRE$<<r,$AAc0BiHYo*ha' );
define( 'LOGGED_IN_KEY',    '4,d)I?J_#d6_ASw^7nk{x464?4C)g g5VuMVq;7ukSXGCH)XdqbtWy2@VZYyTVIW' );
define( 'NONCE_KEY',        '=B/eCFD<`djS-O7NqL&/ZklsyZy}q+k$S$N,t*Tq_eT89lo5MW!C6@XNM%w^QW3e' );
define( 'AUTH_SALT',        'NR/,7c%KY.i5D2BVJ1RS .8r7~p9j_GH<{{f06!t,9{f`($DrBn6]Y{Ttg(uIe}d' );
define( 'SECURE_AUTH_SALT', 'zLdJbnQ=JEa-%TSw!wHzO<-zY^miU*Lw/l!13WdLnV{20F[{m)R`s/S96*}({~aB' );
define( 'LOGGED_IN_SALT',   'v?Znb$^EIa@8N H7(#=E>e8ky$d&~o#X)=YUDGLw+_VG04`^((u7d |jn7* D2BF' );
define( 'NONCE_SALT',       'Hz=3MTu VW/fE!9@gW~|3aW3D:1n@Cdy:2vLGevGrJ##kA&)?_~Us{kCxRW&2M<6' );

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
