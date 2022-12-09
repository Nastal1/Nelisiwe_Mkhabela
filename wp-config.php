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
define( 'DB_NAME', 'Nelisiwe_Mkhabela_db' );

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
define( 'AUTH_KEY',         'wnL8^4%<=>(l]tK64-#DC?5sHudPcUodg&YMl>^hMuQ!DmCS0R0xJYE,zi0HOl<$' );
define( 'SECURE_AUTH_KEY',  '8)Xw(qV@>n*-:/aCV4bCi9Jke4G}Bz-/K4e|cv2:BZc=6=+^W-5NMZK0Fgd!@[UT' );
define( 'LOGGED_IN_KEY',    'g1Oy!mdw:[(%hzeM?BZ>Az/tf4TSd:x&kLo8tJ$aB&CCP9!X+}6L! l9lbj:+Jlo' );
define( 'NONCE_KEY',        '&!&n`qL`b6dVO]39=XJ#nP2MI(+(y!E*FVSNi}~aCxU?Pigi`W$)#lt:y>+DGc5^' );
define( 'AUTH_SALT',        'c%5MB_8_KP,|<^;vb{wGH6et|x,%njRCdAQ6xyRlc%d2MA1yNthdkm{F#SB+:ma)' );
define( 'SECURE_AUTH_SALT', 'hO^8v)34)j+D?`RhEvjo3[yv+1Imx_!*#_lW_I!ADYQ#SUMFo{-zAC og`$^URwN' );
define( 'LOGGED_IN_SALT',   '7@;*4F`jgq`HR^m_^pGkl>$bzEQ(@uzdx1-gwnoP4?]aM6;YWYwDd x<yZaOlW^f' );
define( 'NONCE_SALT',       '<a89-f[pKP~K<#?I1Fa47]n g7> ?lg@VzJ<AjWcE/w6m#_lMBd4WNR_4d{nxgvJ' );

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
