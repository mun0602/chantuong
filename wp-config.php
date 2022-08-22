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
define( 'DB_NAME', 'duongve2_li_18844' );

/** Database username */
define( 'DB_USER', 'duongve2li18844' );

/** Database password */
define( 'DB_PASSWORD', '1884474e390c41302' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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

define('AUTH_KEY',         'eBv)q+f<i+G$-;ibX=3QbvCJc0 yj{Dxbnp|N cL}jI$&W:+Z.^aGV;~[Q2T^mhw');
define('SECURE_AUTH_KEY',  '/Yv4k2tN%V!!tP0yy,RAd7npz+~2)b8)o+v8@NQ{53;[BgEsH-JJeCc/-Ppr+0w[');
define('LOGGED_IN_KEY',    'hs8xJY9f8uLRKkHFZ>.JW3Wl||HC#S~{n@-FbpyN2{K%.SVeP4L*Hg0CSn$YMM(S');
define('NONCE_KEY',        'Q4&<p+[i%~y_[qt{c^vvZY+kbq(}zx]d -0z+r+DI#:++i7$:gKqUQtd:rJ`Z3|U');
define('AUTH_SALT',        'v|u[8Slb^<~@CceQr@{-%;gi-gowNh6>u |G:[RsmdyI!*H}@Y7_A:mVi&4>!%oS');
define('SECURE_AUTH_SALT', '5io3|I_+7M]7+cdl{Tih1[#hj!xV;=V>-[/tK=c|f?m2V0/@a:<>d5@XZ1^LNR{r');
define('LOGGED_IN_SALT',   '>lJ{G+[Xm|K(q^[V|>S]3j3mjuX[U2Rp$+$9W8k`?,1Rh@y=430Y6.?bu;i15w[R');
define('NONCE_SALT',       '^2(vJ&lExiZs_;(vqT-L&>f]HO/ElT?#x}w5e3.fOD`GRikG5LYEc`GMp-vjOACx');
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
