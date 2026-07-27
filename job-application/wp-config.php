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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/bochsyst/public_html/job-application/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'bochsyst_wp_szpjr' );

/** Database username */
define( 'DB_USER', 'bochsyst_wp_6alwd' );

/** Database password */
define( 'DB_PASSWORD', 'M@xmathin1880' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '_21bCx||@(@T/I61]5pha5x/;6T7&A-7M%hF-7bO*)Bd3wRRGMK-7Bh7#OX+_ce9');
define('SECURE_AUTH_KEY', 'gy;o4nX;%771#55C(]8aPc61_LEwu(*@5~d12qKs5oA;e8~nOy7&1y8Oxos;[q2[');
define('LOGGED_IN_KEY', '%7)w7%5]5+Ty0J2-&v_26rl8/lpJH[n0]yZqV(&X+~Flu6YdYlAH(zp@m~643C3n');
define('NONCE_KEY', 'D5/#Yp~#3t+Z4|%e3;WOQ95JOh4%69@c-wY95(DF]@MAl2vpY0rT5H4T(04PR7F8');
define('AUTH_SALT', '*zp@%8Y8*)8cL!lS80CZ+K9aFuj4n9~F3x_o8)!j~wqOo4pdT+4F911w16Bx96[9');
define('SECURE_AUTH_SALT', '6d75-;28+tv5/r#M#]7lJfy28:t~9H7|8bL01_g3f|D2GRHWX2WZ17u690~Lx!#6');
define('LOGGED_IN_SALT', 'D1D@1&Q]1~-*mC31%g2963F&D89#9aF2U0kT95skVOFO95PTa58YD+9-5UwR%IBc');
define('NONCE_SALT', 'f@IieK8_f30tMh7EX&t#7a8EAP!#3ZmpZ6%g5Nqh@46Anlaf30o+-dp!by|b;UFM');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ycie3_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
define('WP_AUTO_UPDATE_CORE', false);

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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
