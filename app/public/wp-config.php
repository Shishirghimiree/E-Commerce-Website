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
define( 'AUTH_KEY',          'Wp<Z1WlwRG@N?8vH&m0T UjI%O]_[8WbG;#M7v$THSv(5)N$r Ga60!`;2hYiBQ,' );
define( 'SECURE_AUTH_KEY',   'KnB~rFdSXG*{z[.a-T`q&g7nj5]iV+)i_+:p& ht&^i}Je-QJ~ 21x_NjmR$]%zt' );
define( 'LOGGED_IN_KEY',     'B~gi2KL?`_!ltn`)6}]LjOFKB,q|~6LKa>s-e}L9t@{0GQWE{.#3H<O+s#J+(G~E' );
define( 'NONCE_KEY',         '31wYZG<=%3{>f`=E*Kf$_MPQfqTt&zw22!f$#@f{[LB1apDOpb%k!]|0o8Z;m58E' );
define( 'AUTH_SALT',         's$>Bj8=5<NO3!T/M6w:`EN+HLj2z!!Ru[[Zw>rI#gkrpT>rkCL>a5Tr+2>2HZb(j' );
define( 'SECURE_AUTH_SALT',  'Nu[c-1C?WZr/ /c).oG9[N:X!yY7&m53RU@sLIbav;Rrti;ndXY/#nN ,g;BN)Y:' );
define( 'LOGGED_IN_SALT',    'K-OF9YPl$sHh$w c[LJwhYDClFpa *KLSpFP{pzc.rYhMs}quD~&~y*fZItg_2Am' );
define( 'NONCE_SALT',        '<fzF~Z+ZW_.=oLt}326fVip]hY0N&oKpU*,|JVEBEYIgP].m sOq1%u*<{z[|qX>' );
define( 'WP_CACHE_KEY_SALT', '[jO05.`|Ru&*6Y&(sz9-Q)|/jTEKHfW)#5K+Pvp$+?=MX$QbdDFBeH!OD9X%=@@f' );


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
