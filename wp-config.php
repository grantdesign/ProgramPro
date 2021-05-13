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
define( 'DB_NAME', 'programpro' );

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
define( 'AUTH_KEY',         '<&}{uo@iq9$`RHwz1kP`Vac[81#Q}6l.au b dFqhPe0op4MGB7yVnKz/l+v/KWA' );
define( 'SECURE_AUTH_KEY',  'B0Pq!@S_t;Rb(^[)RDc7=A5 )@S@o0_$KDWv`/gH+8s 20+Rclnnc;#uF8-9@:B^' );
define( 'LOGGED_IN_KEY',    'vX%(QFeW0^JD2)v,#?V^eX%X`uE%eEp*Eh!wh!bg!^8[CQ}+.OD-K X@t){b%@|5' );
define( 'NONCE_KEY',        'I~*Bo-{l^J}h0Qb%tSu,A1E#`$9IKGvg-X8}DuP?GU;I8UIrSHnFd;8kg1GD/3Xc' );
define( 'AUTH_SALT',        'I|<*r7%Y3OBG;NBx?MtSR^cG}o`fy7?t_h!seIA5T?oNXV($,l;va&Vi]G]90B;%' );
define( 'SECURE_AUTH_SALT', 'KKX..c*h]hH@|?^)J,`8}<R<]Bdcx^]xj$tk6CYt|Dxr5XzG$lRjk`B7-ZNu{Ao!' );
define( 'LOGGED_IN_SALT',   'YQrY3gS2dk{aamU0tjxa#g%~hlcKML8*?OLzktCR1pi]5(](E^eAhuygE1j!j6N~' );
define( 'NONCE_SALT',       'Bi7O?q$wn^L^EtfVY,#`=t%qf(l{]+g;$&u21)n)[QU#sN49krM|#i[MLJ98/_!P' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprrr_';

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
