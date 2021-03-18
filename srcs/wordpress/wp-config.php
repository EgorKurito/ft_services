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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-svc' );

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
 define('AUTH_KEY',         '1X[mtC`nWq1!3x.7+UX.*D[/-.csz=%k_vsF+HpM,$+Y5KhYI);W30rj~ y7?hvX');
 define('SECURE_AUTH_KEY',  '6qs`A }ajvps:n7q+E/}mvbE-YAZwpI51+{9dH{7bmRQg8<m8jpG-xiX0fE M-|q');
 define('LOGGED_IN_KEY',    '9bo(5aK@Ic:4DNjh]Gr`)Bf-]tZyd(v7m+GbVTTnn90iFNlW4QX79}+~bWEX=1K+');
 define('NONCE_KEY',        'q!*X2+9PBR(+4^cO.C+Kkw-R*:eG{T9sj>$D[i_PI+NG`#$)<4-,-L4Rne:X8FJ>');
 define('AUTH_SALT',        'eCv+58(fm|aKfGtkSZLqBvk|Fe3c:!NQ*~_UwDOh[pCk0,[6OJ-]lX#KFQRdM~mq');
 define('SECURE_AUTH_SALT', '1~/@3U@=9AE-$*CC;B_5Rr6|-dt&ZY+3Ss_q6O48]0pVLw$&cE|awi4;)8a0@~Rv');
 define('LOGGED_IN_SALT',   '/s6%1DBDt)S%a!)d.Zv3x]eJI7XN|YB]b44o&K;z8<2&VK(o]0|q:ux{-0U-T,7H');
 define('NONCE_SALT',       'G~wA-trwzS:T[3UL**#rKgh$7@us`Wy(~X|)r#8/|*{Wg{^cndoW+XF5YG{J@.0a');

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
