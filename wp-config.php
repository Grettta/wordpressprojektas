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
define( 'DB_NAME', 'projektas' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'XWuO`1&r~{<k`3w91-f|qMu/p{e9o%~7LJUOopbk&SbFeVh5&t!7Mo0UAF+ft`tF' );
define( 'SECURE_AUTH_KEY',  '@a_a8O8fOf)/ua]:Qiv.[HGD{@A%*nZ&/fpxAt1F6w5pY>x8C}cPO%G*n/dC*Ilf' );
define( 'LOGGED_IN_KEY',    '0fMP~8-lza$Q?V?;oNA[WLxl[4;CXQ6n{/]!/.c5&Bgm. ;Su46sdHw)6<.zU1m2' );
define( 'NONCE_KEY',        'yvyGx7*ZA^D}AUY0T)yVnX/!U(?@akf%VF!ooE Nr1#.;}Q}Z~tywyX*o/(LC!:y' );
define( 'AUTH_SALT',        '$sctK58lck.he#i3m<r^Ce)kQmqF:HsN-lWpkD8_=iD;rSgo)P`]o^_[w{>uL^j(' );
define( 'SECURE_AUTH_SALT', 'c3x.`f:8(|tAgRVr:L1s*,n>^Q:8bC%zrr#bg%O( D^~t dP;eYe,+E72$B295jw' );
define( 'LOGGED_IN_SALT',   'l,Sw/3mPuou55El}y7<_dV@$eOCrwMumgus]?x4#[F]-jy~0F E[4?ayw{e`Bay$' );
define( 'NONCE_SALT',       'K?GE: 9.Yj-Dq*/H;o,%@<N}J$OHf6Y$$>0=#mK}_IwNs:l*0o]jrGy,RRX&34h ' );

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
