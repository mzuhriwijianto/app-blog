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
define( 'DB_NAME', 'app-blog' );

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
define( 'AUTH_KEY',         'e,x S,8p{Rz.v/5zPK7<N{s6ejX_in#Bx30(>RcQm&r+|L!ok Kb}9u[VbDb;jSN' );
define( 'SECURE_AUTH_KEY',  '~;ot.rl{=[skAClR4hr%M#1&z!H$S|G]0:U-B<1BN)gUmF7)cBy}%[8E2~7K8pga' );
define( 'LOGGED_IN_KEY',    'nJG#9Y,hpUR](IX6aun=P`AHI%09;/5$]j@$A7Y;.(~bQ|k}Na[!YbO_5wAqgSP?' );
define( 'NONCE_KEY',        '~N>l#xxe2|noQL S4=.O2mPlEw2Z:/IfVHi5VJ)OrC]w,0~/)A{h<-~!]AofUs@E' );
define( 'AUTH_SALT',        '3m*?+,G~l{`G#kc;TR(nCGc;~p32#c gHz~ogGP|`p:1wfDR.*KnWuQE&79M{-LY' );
define( 'SECURE_AUTH_SALT', 'A@(rkwab@j3YQR%S8My3:Zv.wT0$$*J_2eFZhJ`mNVqsHhVAXI|6*s)t6wwDV+a%' );
define( 'LOGGED_IN_SALT',   '?*yzo#-uuUe[At69hu$2`LX;3JLZ0sN@Yle4{oVaIt^*e>8V }YLKg(nzlV#?~PU' );
define( 'NONCE_SALT',       'e)+<k7CMbn&~)bL%7>K?<^aF+ G%^ork]xw.[-2T*omTw: Z/NI*{3{$wQ1C%wv2' );

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
