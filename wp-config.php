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
define( 'DB_NAME', 'neqra' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'makemebraver' );

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
define( 'AUTH_KEY',         'bkQRz[ 2{]~/1oAxQas9:^kEM(8t-zBe99UFC9?^mB>:t?%6$MdijJZInMa|0Eu6' );
define( 'SECURE_AUTH_KEY',  'v`|- i21[gD!69@kuFX. ZwB%cb`E>sclP{n1?R^>@h]L>6tyR!pu2OcQ!-.gxN&' );
define( 'LOGGED_IN_KEY',    '!p`N(%H7cL~RaqR6e@8Gh_9B$LgNNMB^l8A+)igg0R+(dX!4h;piAbRo9FiQl.;L' );
define( 'NONCE_KEY',        'ANF ^y_L4NT!LJJ#KU2;@[q>|`OUt,,](gN]N_i4iwy!Y#;pVo=p0%LL~+2G+S4I' );
define( 'AUTH_SALT',        '6q2=#iW:}*aN|n+*v6<xhfM3)W6kAvfFOQFPR:t3C`22Rk`gj~8xGW5Yi`6N;Gw2' );
define( 'SECURE_AUTH_SALT', '`IxI0!J|;sVJkaAXbkz) 2(^,.^!P>%H[(mD=f*bxK%l~@kt_Ftc4{2tU;X6 &Tt' );
define( 'LOGGED_IN_SALT',   'KiKb,dTFyC2715+Z[X&mi 8@T|%21iX&kqd49YWr@qNE8JF(UVRYq`lfp`%|s[(d' );
define( 'NONCE_SALT',       '<{H<voztm@&n@OfG5SV=a~M5<d=lAh?;+_t{;*wjsn}P-]8+CDyRC_noC>{dmu4j' );

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
