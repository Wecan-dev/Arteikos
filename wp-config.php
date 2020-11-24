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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_arteikos' );

/** MySQL database username */
define( 'DB_USER', 'adminwecan' );

/** MySQL database password */
define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );

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
define( 'AUTH_KEY',         '2vK%utjVHQ*Z*7wSS)_vMx?;{NS:4[!#g<P(&K^j^ p:}f1f~M|GoJ!^mI{KK{bO' );
define( 'SECURE_AUTH_KEY',  'B<Fw]%PpZhtY6*E/ktY40cF`d`USWULT+J:u0&CG0R_r!#PfHnul6SBbGS//Y>a`' );
define( 'LOGGED_IN_KEY',    '[6)[R*2z@`ojw1[f}t(>O4&v@MP+MI$0u9gWUrQc4A;7Mp3E<U07C8t;{*|~L!`~' );
define( 'NONCE_KEY',        'TAT2osa%Nt#8G<W A/Sd7?1cKhUDwc(9puP*`eAPQ#E/l)KN@kUhtuOrqQr!uNLx' );
define( 'AUTH_SALT',        ',nbAhO:9<S==3$<%!AW5t:pkq=b:/*qs6SHcI5{ZCK![79em|0pRUCHT[21vN%Y,' );
define( 'SECURE_AUTH_SALT', '_4v,1`dVE-elxVx m%%$Gc#?ppxB7V/%5?FvxA4Bo$XwzWA1yb|gJSIkS5%nAWfv' );
define( 'LOGGED_IN_SALT',   '>BZs;h%9M1^(<PKa3,tbKun@x+iEL?v}7`45mrK0D[_zlL>wB )@&5duG:*HM:?=' );
define( 'NONCE_SALT',       '1n?r.X}N=cK/M?JOHbTpkB$MXRZ_.gbgGUgr7ICQjA_htp!pr=dH+fi7D9l({8_>' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD', 'direct');
