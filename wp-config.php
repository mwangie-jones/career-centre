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
define( 'DB_NAME', 'mua' );

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
define( 'AUTH_KEY',         '<k|U?TvL%p<t!7oLBFP-SSz+%eJc}7Rz=-*agK:VD|c/epCbcMo|ZXQK1>L#X- R' );
define( 'SECURE_AUTH_KEY',  '(EtBx.vWr~Gmlsk^<7agdIf^IJ*v47)^% Q?D=Tyd:prx(M9{uY5h$j*z+7cev.a' );
define( 'LOGGED_IN_KEY',    'w8<S7^>6_hsf zcyO;V*;wWe{2Ux8ixGFd+l@J#JD!PFfy>EB7mp(DZa}j^z730+' );
define( 'NONCE_KEY',        '#GUT4I,2rns&R+HEaQ.d`xX`;:fl8rMIBsZ?|gvh%ovL}O!,*yEnH_*1|d[IT(S9' );
define( 'AUTH_SALT',        'UFm^_!-D570CR$o8cG2|9OySw_{yi-!5,G|aBW&iI&$jC}Os=kv&Bc`z7j[SRdRY' );
define( 'SECURE_AUTH_SALT', 'b3y2f%s&ebl_ M$hUwwvV)Qo3``%H?Z}~C4|4EsI~:+sv>A1dGh[x+Kj#joz)lm3' );
define( 'LOGGED_IN_SALT',   'BM1,{m-ZL[bdkLa>]0o+SYSuO$eU@,jIRquFJbkB8R/}6)]n^8a] uV8X2JRn&,x' );
define( 'NONCE_SALT',       'xrqxHww; n6uYgg;o^MEE>j8SVW_gQNoAy+>Zg7]b7;336~aZSE5&x8U3GG+>grq' );

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