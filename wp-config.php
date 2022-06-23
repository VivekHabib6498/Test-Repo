<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
$_SERVER['HTTPS']='on';
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
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'wordpress.cst1cnnchtgv.ap-south-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '1S(I,p:qaaxGY j|([ DV+@b?m; $-Y6h/aQ>&-RfcXYYJF;S&[i%jz;;sQ*m [#' );
define( 'SECURE_AUTH_KEY',  '6QDs)%OpslM`>y*d?&>P<yi+(6x`X4x+xW awLBu;SZlDNOrG!BJwL)iK&V+.ur+' );
define( 'LOGGED_IN_KEY',    ')0sF-jZ3</Maw26*|P(a!~fl(.r+.4hN9*ENb$|~O{++[`|{s:#X|6Z_r,}-Q8S9' );
define( 'NONCE_KEY',        'sT(5|hhVk^)]Q.:rN)Ii9U2sP@qpl|p{oB7:.IN(XS0jvZ(:?rp|0(.JqgU<9xx/' );
define( 'AUTH_SALT',        'O,Wu#qet,ctD0f+id@1c(5orNPYl8veZ@-)TG$a4<3=~l9-=R),s5#:Tj0(aC O4' );
define( 'SECURE_AUTH_SALT', 'kc|+yB2bJjhD|<X@2oS,uw@tXqRkej-&u$C>D|_xb.=G8-P%|N4Q6@=rw#7N9y-=' );
define( 'LOGGED_IN_SALT',   '=.h(hZ%k(Ez>-8||;7{sFH1cmA!A`0Z2}:Q:9#h2N,Nux+BVUI9w>Fl0LV5-b_KB' );
define( 'NONCE_SALT',       'gG].Wm.R>SZxMM8.|K1Me`G.%]zqNvr0v-`;D#y)U{5[@hV)>%Ecl*X[Zv5G++T:' );

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
