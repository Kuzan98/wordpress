<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '?Q?&!7]>>{Vvn6e1@ua+XJ=,6wm_8$,^il+#P8 @`:uY)%1/b$p_Yhb/UZOTa5-v' );
define( 'SECURE_AUTH_KEY',  '%5t4nK7)BkuG#Z+@vAu)c]02?hvKNDQiDvHEF;=mx<!K1_q`.DzSx^1[o`qNFX,d' );
define( 'LOGGED_IN_KEY',    'IeV<fm9r%.+/M~Q)ww^z<R2;#-v,}5Na:pQt}xnD&hs-PDyYeHN]M#<3tZ]sAll{' );
define( 'NONCE_KEY',        'AD_ZbNvS6b9V11{0X/bLhU22jNMWd*B&$873;A~4g/.c&=y8I/!/)O73;Jtc8Q(/' );
define( 'AUTH_SALT',        '7zsNg{CH*(jQTCebE~wH@2g;].hKxPp!1m>fglf*X@7:Fty]hop0J>w%zwSH7lJ:' );
define( 'SECURE_AUTH_SALT', '@= 0T*2zL@oh,-LFO oi%(A]_Si]4`dZ~XPH$UJuT.3C}M}d$xz~:#j^+Y=0+OkL' );
define( 'LOGGED_IN_SALT',   'B#.5sbDZoZ{$<%h7GRp>J~4-UPcu7IOd^t#8D]-nm$-n0T<esX[&Jp;;tV0GRgcM' );
define( 'NONCE_SALT',       'eBH~d-Y:aXMx*PA-nmr$GA[?*hX[jBCaZ@),& /tZ5S|,r/XR?4jx7 TXSl)5!a$' );

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
