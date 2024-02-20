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
define( 'DB_NAME', 'food_language' );

/** Database username */
define( 'DB_USER', 'food_language' );

/** Database password */
define( 'DB_PASSWORD', ')hqod.0fbI_Xo@gf' );

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
define( 'AUTH_KEY',         '<)yZAPls!Q3!AQ,TjA>8*DKv*-(?1rM6jOY_KoOX6w%}j*BLX=pXXd1$DFf$0?g2' );
define( 'SECURE_AUTH_KEY',  '/?Q`_77ZYbrb6cJ7!D~FAJ,v]v*n*hMi?.5~r0vz^Gr^Hh_z$m?L[o_hStdW7_#b' );
define( 'LOGGED_IN_KEY',    'FZAnzn=7no #%,4m}w7i8 T3i-JlE0Kl|schF4sl.eH jvYy>kHRDo_*vV: L4;O' );
define( 'NONCE_KEY',        'M[br#c`l-GCcz4ox_uK~Vn9:$i:WRK@E3qQf3+Pe%`<=V=WQ&`,3.^uRx]11@oC/' );
define( 'AUTH_SALT',        '5(3@21{m?6*$#R;&:4m8:c::stGr,hav7a{Q4X<CRxQ$0Mr(5~m181$,N2C_U8P3' );
define( 'SECURE_AUTH_SALT', '#{?(0R,Tt]:EC_uS^_$hbR/)2utt<%Go%Z)*{3RsO12rU(0/q}6Gc%Y]Q`+ZAxq^' );
define( 'LOGGED_IN_SALT',   ' J-|:jBsUm#<,2T=om?ws<;OROW^B3% i$iWL2N]Ai;YRga90&P#6GYIE#`J#{?0' );
define( 'NONCE_SALT',       '<FK6635m(Vj9vDEU+@3VSCgeI];L}1prMO{+Q0F,}qW<_RW36++aNesVc|/w%qh;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'food_';

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
