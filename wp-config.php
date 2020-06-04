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
define( 'DB_NAME', 'wordpress20' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'jC<M4 To{)+6BI-h:L<7pm;Ip+!x=#|Jy3w(?H9,K~@}vvQ6jAm(cddYfJrsWT5U' );
define( 'SECURE_AUTH_KEY',  '>d)M,jF5`{*!$}7u<hBL0RWm/u(w;ixci$MhU:qPxnt`YL+uxl{T[05MMC|bl!Eh' );
define( 'LOGGED_IN_KEY',    'b74Hz1oS5s8,tBwS|jdm+J0p6_`G>~tQ{-)t[V@-wp]I~@U6C1*aG?0 i7&cC11m' );
define( 'NONCE_KEY',        'gZeL=P>M_#d.I u:=O2%g>O-,p%|Uf<+4Nz>.xmUJA]_hbM~D?uibz6L44dN%7X}' );
define( 'AUTH_SALT',        'Og3Z9NP7+^cSBN#G9MsbV(`.K5fSL#7SQ?}/BlKaMg/jM;FYq45$oe}zO}m8We&f' );
define( 'SECURE_AUTH_SALT', '{@!iAr7tOI~I1)J$|cv$+[b()Ts8<Y63gjM )%lj0@9Z^TD6;+p$1[^-2W#{0oI2' );
define( 'LOGGED_IN_SALT',   'PfwGPIq[tWwABjOwL0S@Is[kz:nNFKD?<B~y[XdLO0789pK)WBb.ha6`,xJP:G>R' );
define( 'NONCE_SALT',       '7.N(i@md-Y5rF |^hst$Xz|C;3 LSCX%x%pv<kE;$/;ns8;mryfEdDL+$&YK,d/9' );

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

