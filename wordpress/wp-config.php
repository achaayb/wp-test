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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'zt#Q+iu <bb5E5/?833y|DPJiDyD;KUpqZyApDepS{Qu}`RDEw=oA~a.+Zh f{St' );
define( 'SECURE_AUTH_KEY',  'hkt`B3}{55LmF%TLePwA6j{qPp<bWqB,e{LoHovH[EU>WigsCbb=ENGfAG gn,aL' );
define( 'LOGGED_IN_KEY',    '*t4]QnaB?aD^AO1k8G9&@~ FV6z{+alZH*@_@3F+:HHq9YHXH$!a8NIE]qjTq_VI' );
define( 'NONCE_KEY',        '&`D=|!|yqPIV$y!if*<-a)jcP 33ZEPJlXuD7;mf7]1w^19w/`oR{1vi3G}.g}D&' );
define( 'AUTH_SALT',        'TY:`6`nc5^Rk_l8wNNDWs(u;0hLU;iEuR=JqN^&he|2CErLLBZx2<$* z6~z| ,{' );
define( 'SECURE_AUTH_SALT', 'T!Tw@|jf-?8Tb3#z/gV_MAKoCdn4jERAgr[Ss|.0{g0U_7JD1>Q:FE{^ H&4M9Y`' );
define( 'LOGGED_IN_SALT',   '7$-y/HZ@o%|O!4A?7l82NK-m_^.+5b)g#T[?[_*jzUVy4>wvwXFg8y<93fedv5Z~' );
define( 'NONCE_SALT',       '~4L5j&=9!Fpz]2hZptc7{MOz!hmAjBIx-W!EU-{coBj!h-LP!4$JK}[ksjNRssbW' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
