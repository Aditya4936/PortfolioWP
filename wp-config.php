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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '`C)bH#tR><q`@epRrjI}kS&.b;S7co#uTypXmQFyQYF2+LG@f?^WPJ/c!v0Pn/M<' );
define( 'SECURE_AUTH_KEY',  'Hi1%ggVB(G>DidU(Xr9r5=gv<)5_;hbQl`ux6@ s:o2xXUjqyp PP}%U`Mf~YdHr' );
define( 'LOGGED_IN_KEY',    'pIW `<]V4$nnDfK-)XUreb><O_-w6W{]jVUZKsHFQ6G4*1Q0h&gq:*(3Stmg-<Bf' );
define( 'NONCE_KEY',        'C;O-r<{):.y1&p*Fn:_:D7Ts(|Z9zk)XDvzd9;l/8L[THj5tqax@-_na8q79Igt^' );
define( 'AUTH_SALT',        'mjjkQ1ke<Kh1eB5^7qiVry>|}:f((HJ6>6}Qos~g;k8G,-5m0BkiBng;$Mri:1;N' );
define( 'SECURE_AUTH_SALT', 'q;0Jrq0`(H.FR}aUGbkghJ3Hz3RQo{<.=7}2.GXVNUaRI8xxS,5/&(a|`JC<S]2L' );
define( 'LOGGED_IN_SALT',   'n@#fO-D/7)aRTiwz2/|`QB9|LA3zF,f-.]lzd3_|$bzcU_!.sIDKJ<fZ06I_`+-8' );
define( 'NONCE_SALT',       'If!rf]4E0j7^aX3gs>G#~]Wkw:RoMPL)l-HtJEF,K6kb ib##Ey/A[1~o<u0%r52' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
