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
define( 'DB_NAME', 'adarsh' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3325' );

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
define( 'AUTH_KEY',         '3v/81Ig1|&6k{S|gkYLrN`Sv5oqZc?)A-u8OnWA:vZ]#SFv<05gGcN)Uw_aOmb>f' );
define( 'SECURE_AUTH_KEY',  'nO7B@qO DA[b7J9:IhREQdSFk]z]L}$[}+mAW]O)h6B!*~3SH,7(+/>QpTPc9jWf' );
define( 'LOGGED_IN_KEY',    ']h4p]prBtIq9k]=nqLAQ/H~&MDkE2zrZb_/btZ<!PdhfZJv#X5igO_ZFF9`j <=}' );
define( 'NONCE_KEY',        ':qieUMw53F&`_F*I8>~}OJOexb%$nz>sy:.M&.)C]{[|[ a]l>@&CAZW}C;h&9<@' );
define( 'AUTH_SALT',        'l4f)6@>jBB05G76uh# SN35)%m [DXICz$><5Gg>g1YWW:86+GQnWxH3hx|J@fa2' );
define( 'SECURE_AUTH_SALT', 'm3EXbZpfy5ufL$<<jGz~T?4/zw,NVTe&]I=gDvr4E=NlnD=;2R5q;S~pSgC|mKTe' );
define( 'LOGGED_IN_SALT',   '11qo:j6&m-a2IdJ3qx@773|Swd|pXu*gc[@~%GH=tvC(S%O{$U,F|[{%V0ipF#h^' );
define( 'NONCE_SALT',       '[o$T_Y994ppK{bSL-iqEF[<D#O:-,1w/*RVR^:}}bCJ.f8-9VyaypINk%Vf/sP2z' );

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
