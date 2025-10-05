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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myProject' );

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
define( 'AUTH_KEY',         'z_L *x.nqp{l^iBDd2{X Mt-8OZeR.9Uw&v~<=L):pwVPBcihrLEA:rYO)dG )>O' );
define( 'SECURE_AUTH_KEY',  '/UrVDp^n:<_Vq7$Tw5Hm(Z>nItvCHI^#M<3;v0z%kki,j@Ab7Gps5p8qPn)>X1!P' );
define( 'LOGGED_IN_KEY',    'R{rCy%VtQkm(f!)M*O,v!2l}VX3s w=r}ju#yA5`m;*~;$Ky=D4>X93l*%7O$?$ ' );
define( 'NONCE_KEY',        '=})Vj[aWG*zM+Fdw1>[wen@,A>B[LH30k9:Fh0l+<50BxRJ;GC0;)>DH]L<*`-kB' );
define( 'AUTH_SALT',        'r#2qY(j5bRxS<(`bbZV%$~+$BRpjbJ3s}/[DFcd/0w1ENSk<Y32y]9E0yS=7,B74' );
define( 'SECURE_AUTH_SALT', '+VbZI[ dZrMi.b4.J.tw&eI$*Il])dfVY*)=N$s@97+h$Z0Kqq+}63ltow^dX#1+' );
define( 'LOGGED_IN_SALT',   '=.UAX[vLJ6,ofj9m9T)}n/.pqkHgSRo(L)2>,XY1Z7jd`cb84cTfP[_0+15]Z8:C' );
define( 'NONCE_SALT',       'cU2JpAE$isPUzY?%!I$noE{]p[_>p($XS>LJ&p$i_:LtX7={X,z2tn%}w{Q[iNsh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
