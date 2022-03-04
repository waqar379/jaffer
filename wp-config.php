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
define( 'DB_NAME', 'tnlyipuq_jaffer' );

/** MySQL database username */
define( 'DB_USER', 'tnlyipuq_jaffer' );

/** MySQL database password */
define( 'DB_PASSWORD', 'I<3rextechnologies.' );

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
define( 'AUTH_KEY',         'WIt;HU{KGX6#+3Bep|H4haY3W4oTNi+Gz3kwpHMq4#7I?CB-fQ~tp@vS9sQh*S8|' );
define( 'SECURE_AUTH_KEY',  'DRt0/ssO/Ci$:{Ra6r:w,9<v[5GQ(?)6`zX0r}v$v>hdS`G]@zH>&HOg%~6E057>' );
define( 'LOGGED_IN_KEY',    'Bf#uQ~;Pp%)vln@(.RTdIB&kx_xr3{0~e/<a(+/S{But;`_RHe,eMKj]&[OhhtI_' );
define( 'NONCE_KEY',        'SYJZvrnVe#?E:@-[z_K=assN~*eVvI3lH]l+{Xc~W{35,ot4$m~z3yd!aahlcVVj' );
define( 'AUTH_SALT',        'kk3czvgVjl033Go[Ih~#MDzlU99=a}6nxUEF,8pt&T+7p7AgtWeA,Gvx@<WTT=?u' );
define( 'SECURE_AUTH_SALT', 'W>*/h!3V{L)6n:[qVY`Qyog7_3?X(:T]YY :~k)UL{A024n5xdY>2^o]qe^%j2N*' );
define( 'LOGGED_IN_SALT',   'v%we;;,[qNUjN*adr}lULY~m12^[x?LF{oT`1Uwtj#g-b2/25s~-OB)6A%!vZ0!i' );
define( 'NONCE_SALT',       'z=94g8I)d.!}FJQrK#)r~P`zsm;oVhVe<vXq&hQll9o99k5@WH,m MwC^tfEWP^y' );

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
