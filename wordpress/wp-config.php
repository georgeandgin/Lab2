<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'bookclub' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AIA{)+a,:%8q|q_0gBN~<PF$IR<a+mnu90-v;OS,wW[6NV#N7Z;;rEGF}6lE&;8p' );
define( 'SECURE_AUTH_KEY',  'P8+&;@9z-ONfYt;]5]K Pg$|L)8up2x/EC@jscqcoDJB;kqZGD@H~o/e_OZFC!7#' );
define( 'LOGGED_IN_KEY',    'Vu.OS&F=sY[CXuVpOco{>~Q^D^W><2#4<&1UebEDj ]}6`7-h{(c)Fn$xl$q6R]m' );
define( 'NONCE_KEY',        'k(r<B,iY|p=*Ei@Jz(voSc_(^??;8NaUZzES[GyCd2^i&jj yCD}RC8]%l=15KNS' );
define( 'AUTH_SALT',        '[/zO bo[67IU:=pb-N~jGvpG]taif&GC<3BluWM(0wmF:ozBCrrIT#;Rzll2,@$/' );
define( 'SECURE_AUTH_SALT', 'qF]=j_X|<Mpd3%|gu[bgoFKm<F{$|-Pxy}@_`MOCC(A*6`-1gE| oi>v.zTY|kjx' );
define( 'LOGGED_IN_SALT',   '>t}xq?xxM7!8sRA[]{_/6+u2wn##WM-aU~1Xixbq!EhaY}Ho0ROTt?Vej5dOj$]^' );
define( 'NONCE_SALT',       '#yjb]b+vS@Z<y]Iy-0H{(ERxyC|COjh8wGD4IS&JKvNzgsVcEeB?~:?J]F>yDEA*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gg_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
