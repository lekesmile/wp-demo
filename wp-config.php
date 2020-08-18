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
define( 'DB_NAME', 'wp-project' );

/** MySQL database username */
define( 'DB_USER', 'omobaba' );

/** MySQL database password */
define( 'DB_PASSWORD', 'omobaba' );

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
define( 'AUTH_KEY',         'ZA+VKaeB[-@KLW]@~>>vb^|`APdKy[}[RLfTj6uWr3+8zo<k!^KprUZ(#qH];&Lc' );
define( 'SECURE_AUTH_KEY',  'hSe98/T#-cpMwl^Lg6;G>5rw^xb8KxWy6ULLg{4q*{ lw#9)cD0Hy{04T22APs>j' );
define( 'LOGGED_IN_KEY',    'PL:S/x<ROz^wHTituH!46KkFV>Q^<Luuj ZqjUiPIT5nb&zc +<9K1PLhd8bm~*&' );
define( 'NONCE_KEY',        'Ult1)m<),1kdGC8z5f t.hV(5|L.ec;k>PQ!#10}p&gxD%L>m`wE_9/A8PObJj&&' );
define( 'AUTH_SALT',        '~P+m^RvnA;yp`#~wb6yl[)tDKzkD7q.J4jg;3OXpEPH2qcMl1l`w%717[A4YX)/b' );
define( 'SECURE_AUTH_SALT', 'PxOGV@SCZ1$l!:[}oJ!}2JK2m9Q[n$v-+@^C|gN(w?;2iBuF9nS?^i?@:n5iVI?B' );
define( 'LOGGED_IN_SALT',   '+ Q<8F}WX.7C@b.VUq~Vd+wRuAT>Lp%FPUnbt(}#K$Wq?!60tJ SxzxP?}vyr)q@' );
define( 'NONCE_SALT',       '2</`In)y*dgao6[TPI*386yU])L$>-(o>JyfsvR-c L&r$9fNf^<{)gLxZH6lfsa' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
