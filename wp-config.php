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
define( 'DB_NAME', 'malang' );

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
define( 'AUTH_KEY',         'S,NQ?0$40hf)xeV<y((q< Zq;o_+U`)oh&n#IPgw<8v]|3zFNA njR%Hkl> Khkt' );
define( 'SECURE_AUTH_KEY',  'Z7cM}z<j(lN>O58]sX 3w<t-(f)B|GsD(;b^5{4lG$3%#-WOlUq+4|k,GV}csM3e' );
define( 'LOGGED_IN_KEY',    'U|n.&wymhD<Vdsb_8;Qf+:~VQbc!`qt,*zAc--#-&VO5@l81ODTP0|Uo?D9_re2b' );
define( 'NONCE_KEY',        '17Ue2Ik0lw0LkuFRy9>vt!oaE,^I+W@>=XckT:3)1L:O*]9lyF$3l~S*ty0JmJB)' );
define( 'AUTH_SALT',        'dy[MS(nAYo6v=$j*!k5l7edX&krZ%}=KW-(qnWVF^gM`<(()mQ$0.dd{Bgn!x,x3' );
define( 'SECURE_AUTH_SALT', '@7&/<y[]UDAEH:d;=+SYd#AeT:+K+Jg f::?],AIU3xn~^f#9mxiA,Z|Zoee=% 9' );
define( 'LOGGED_IN_SALT',   'hzyhBAp;E}MS-x_~v>]rEyPT_ nkbd3^*(Tp-Rait|n,3HZ##c^tK5!<z%g^!]x?' );
define( 'NONCE_SALT',       'c}0Zj5(+Pi16u]:{wThgX}Jvx $N(#_emu`5NYhNp>8Z: ?av*o$g:=eP;B<Lpn{' );

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
