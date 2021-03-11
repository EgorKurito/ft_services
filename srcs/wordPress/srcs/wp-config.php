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

$_SERVER['HTTPS'] = 'off';

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'hanguy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hanguy' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-service:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '+WoE9.QU%c[D/-8jvn<}f&C4-jD+0Wxw>Ew8de-qlXTZfX2K>LjX`VDM,ZZD}8EC');
define('SECURE_AUTH_KEY',  'E;/L PscV({KS}FoC;H41p#_#--Y9ZL&D<:yn[+O5t^wy,jF_.R.z}dRf=T-8PnC');
define('LOGGED_IN_KEY',    '#^-tE|KnM%~M(#EP,2.0jDFkR-co,}J#e^Nl~%ydgZG, iJ2Q;[TQMUUK{Am[-22');
define('NONCE_KEY',        'sa 4*?+Mte@w]Cm?ZGQTEPEsQgg@v-TT~MP|@m#>S2VkSWZH5),NHo;I_0hpUp%~');
define('AUTH_SALT',        'oJC4,z/?WELAr8&>6&|bey8.%bvOaPl?N0+m|+Bw*A.6hq5aK1-(9!E>7*v7{*S]');
define('SECURE_AUTH_SALT', 'aOA<-9C]{NQ3tXzM{6Tcv#y<`^( Rn&:IwjpC2NM3Klf-G[1M`D._kJB},}GP(H9');
define('LOGGED_IN_SALT',   '4`z2/^,4|p3vh|xc%^-[wwat^`WaV>~l1ECe]tbst-e3p0)+lQf<6vCi)w<RHF-G');
define('NONCE_SALT',       'W,fx,M =c|,!v|z/{7Gm+-JPmv}&9cRiBz6+Y||=N7R]91|e%Lzsj4sF9r1p{9|{');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpress_';

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
define( 'WP_DEBUG', enable );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
