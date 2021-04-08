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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin123' );

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
define( 'AUTH_KEY',         '`jq7uqJ$$~w#*AjYQ=}c-g,[*yzqGR3F$oA`1WL$9uOX2*)*0 ~gh[Di0wD+ScO=' );
define( 'SECURE_AUTH_KEY',  '(_g;7$^UY8969;((C[`NC).?#Mc?.L|Pu<>tm @E5%@G{$oC ^F3FNr!s?BH8Nwq' );
define( 'LOGGED_IN_KEY',    'elTl0q5EeBzQ]s:-|lbRvK~6gB#%?2Y_BV92<y2Q8S! Xr,fG3X||e xs%xITFPN' );
define( 'NONCE_KEY',        '?a7:J:RKX_G)rN%msZ[,.U;W[,,x,W:CL_6{Y*%Tutu#j$GqDh.I37k)n2L9o&g]' );
define( 'AUTH_SALT',        '{%K{cz8:X5Jx1IX5= F%hR.5.vNz,L3:L`*Hg}8Xi`P5$.cqr50%1B9eBCyIMYJW' );
define( 'SECURE_AUTH_SALT', '!fNYI~?@Mb`MV=],/2P[4t(|G/Bxg&d{zO;>).1*7%A$[ /x`%N4Ia[R=I6K}pic' );
define( 'LOGGED_IN_SALT',   'l@VK]tVR(0w>bB4d3SK~b5,,}87BnhtdXB2pXdl6^6s2nMDQm>?$?0)oxd.[d?@,' );
define( 'NONCE_SALT',       '9O`HLHkGW>eTe)k|sc)dei0vRN%tk=*_6fk&PT`hh{?vqDc.2=iqxftcugemcD*U' );

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
