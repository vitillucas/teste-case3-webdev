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
define( 'DB_NAME', 'webdev_case3' );

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
define( 'AUTH_KEY',         'pY<~wk]|W5l%h=1 6}V(2[.naZOl?IItT22*l$W3NS3,(;vvKLz=u??*m]7w<qNN' );
define( 'SECURE_AUTH_KEY',  'EK($&hbhqH?%|:OI]*j!=OEdqOR>z{b6~iT5GUS!TSf=!g;NplXk3M_-NPY#jJHk' );
define( 'LOGGED_IN_KEY',    'Zlc:1Yc-jp@wAIgq7I2HgZmY7o!^!N5XI|ac^J;JJd+O#AWc ^V-!Fq{;h*16tcz' );
define( 'NONCE_KEY',        'M7)Q=>Zq~f22Bz,Bl(jT$a_?Cm]3:6PlwDjqKhN06Bj{B PHRnx`_xo/_6p*8].[' );
define( 'AUTH_SALT',        'a>8[mR)J@A[~VLy!n.|@K^3HRf8F&M:j0^=2!t_v}(hk,X62Wvh3 @)8RyW3K1ir' );
define( 'SECURE_AUTH_SALT', 'RgsjS!0<vX|F8NZL&YuhkI[ v!!-uT/a9Z}v?Hq]eS(6=.&.h$*Qq$dF8tZCKbCc' );
define( 'LOGGED_IN_SALT',   'cdtKU#7.|AkkrC|m`,v/6c}b$-&ye/N0eK$3 `_1U<wk;`-s]1`#:l=$7|`_)}{9' );
define( 'NONCE_SALT',       ' d9[Vv3eyBXev~bT$%aVpuX_a[lk5GNEV?_:a|Z3=?#Vl}7rt/WReaAmwCU`nwpO' );

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
