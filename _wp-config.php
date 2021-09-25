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
define( 'DB_NAME', 'coastrevampnew' );

/** MySQL database username */
define( 'DB_USER', 'coastrevampmysql_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'awUdg81c2VeNIkoP' );

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
define( 'AUTH_KEY',         '[QURsa)|CqA%cvUYZ94DsFZ0Pwr0)=df_Pm=ojO?E/@tyo>76w}p$H~8_y`XTj:A' );
define( 'SECURE_AUTH_KEY',  'p{T!LZpx}l1fJ`%p:I^>sOU={<lx,lLT2,o}I3ErJxWvlfw`RjBT>1$SFyDz<*ub' );
define( 'LOGGED_IN_KEY',    'Ne RTUa=%?M)LW-+yvd{0V<S$Q[P1!*_LqN]-VhAtCxiUc)UY}JIpQDClPR3BA6^' );
define( 'NONCE_KEY',        '}Qf2<WJAZBQ{t|Oq<X}sIv$9sYW:ocIYumdCZ+O6RRG 2f3Z .SbnJ)+5OYb_mLQ' );
define( 'AUTH_SALT',        'RI#;u;9;kl((H4aHWD1MLJ4s(64Z)oY}~Vpc|k v@/QgKxx6A~]<U~q>]Uk=CsSP' );
define( 'SECURE_AUTH_SALT', '//1s5:?A@+`J #qmdqLWg3sUt(bIVR`G{nxN7_2)`(N{{Tnllt.C(;laAw~$.qR|' );
define( 'LOGGED_IN_SALT',   '84l9dsk>$~_-?+3L29`<RjjxZdsy#XWus<z4;Z[kmn;m]qm*E6p_K|5S [ITCYdR' );
define( 'NONCE_SALT',       'D7P@+$ie7TwWFx{2pbQP2gR8FLsDQ,v=Z4,IPxXH|cxmr33(%LYFBoIpL_EVK_7c' );

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
