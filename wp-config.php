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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'W)xRk)d8SoZt=Ff:HE=>{w;6oCAYjQJ%Hz3p&(d7.g81K&)ykh,VG<h<w:d`zV0z' );
define( 'SECURE_AUTH_KEY',  '8vf7dD#DpXt`()#J4O|#[NZIZLq>*r*Ys~5Yl_@K_Ey#KO;oveo]55L3+ P$q/dA' );
define( 'LOGGED_IN_KEY',    '?t^%:wt%oEcxbI;*J4v^&i_1&Bk$H+@hJs7]!z[<B!zf:aiV%O4$_hAKTNrF_q-D' );
define( 'NONCE_KEY',        'J>`u+_N+Y] q3_cp0pHXN0P<U*z sb0!Z[d-kz=h~!0[14?.O![8e(h&z%qy{9B)' );
define( 'AUTH_SALT',        'Q7VGC+v<99r|S=$]]WPiXiqtGAl:aO[=1FL?P@gx.<eT4w[-@@|W;::$N+HvgAC.' );
define( 'SECURE_AUTH_SALT', 'bR/o;Q?O&>1{&Rp5],^p/Z_ULlO$`$o&T1)li)=w~R y8.QWh`)</N,fjC4Wd$dc' );
define( 'LOGGED_IN_SALT',   '^?8Z(~abtTjAA9`bB|@Dn<lO}H<Q{E]y=5h`?UQ D]ZllUZY~lmSI1jX!`JS!GG2' );
define( 'NONCE_SALT',       '_@X<RqgBL!!&ero 0xVfeLq6$6|D9SxYBwp.bE35-1gUCI~S)/*e.OE?r]*dwV[a' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
