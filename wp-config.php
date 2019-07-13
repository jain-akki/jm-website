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
define( 'DB_NAME', 'jm-website' );

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
define( 'AUTH_KEY',         '=nBZEAo^;J.gi+k)aL`*ojr*D,-3Uy)Th>YUob{Gx)po3@8v;&#lE}V+oSk{Ehb5' );
define( 'SECURE_AUTH_KEY',  'z&Dky8#5<Mik{hsQz4apd_FJsN^S~xfLFKfLyJ:mund+dTn%niYki&7BH(|~Is$T' );
define( 'LOGGED_IN_KEY',    'W%}cnKW{~zb[e`Wpk)B_mw|(&f[tWhcSL}ptI4mRGQ6]~$?EnN(VB?#}vu5PVKn,' );
define( 'NONCE_KEY',        'eMR%wOL[<FNHLssn:TDO&)0^&|(xV0yW:N_)x8VR2>ssEk?NTYi@o4p|KN#ZyDFf' );
define( 'AUTH_SALT',        'Jym[Kx,BKJ4i5j!v$u~=[b/+ow^moaK!lcwfT6~*hbE|R:n$EQx|w&]EB&2<KWfS' );
define( 'SECURE_AUTH_SALT', 'k*h--01~P[_=Mp3T~yC]ceKK&; D{bkA[YWf$TrTibE?9^vEaIJ59wcdep@Td{(p' );
define( 'LOGGED_IN_SALT',   '^(_l4Qp@Y_:Yt^hdH@aTy !}SeJ0n.l~e[5`Jz}Q6q4LLcT(r<i^4-4@PzB4.gjd' );
define( 'NONCE_SALT',       '~m{w9&w}onbk!L8tsDYqY+N/n0eF&8;c{H bDz_,rPDQV.MXMhW{n^F#pASb[iy#' );

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

