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
define( 'DB_NAME', 'u762468870_vietec' );

/** MySQL database username */
define( 'DB_USER', 'u762468870_vietec' );

/** MySQL database password */
define( 'DB_PASSWORD', 'T1mtnntgnmsc12' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '5vTjdP;-fB4$i35?dm&I.h|dR9YK.iBm{dr^7kxz9$V|FzeD:1]17&)ZN5;5+XzT' );
define( 'SECURE_AUTH_KEY',  '2weUPk.a:D^r6aw-.M`f%{,3DVY|o9=YRvp*DJy.?m~@|=-|a9& Q-U99DjMm.>6' );
define( 'LOGGED_IN_KEY',    '9)pK?Wqt+f2gpb6^]5AwChbhQq?S^|+h<9waZ.viCAn9H0^7 R=o>%aT[yAvr/ok' );
define( 'NONCE_KEY',        'nZ}ItQ=TC3gfXDZ{S={Wm#r9W(Sas*]72>@{|WL|NCytNF-=@p,cm;@W|mRi|r58' );
define( 'AUTH_SALT',        '~jE4{3g7]FA!WLgJp+3+/}|.=GR2x0(X+?gqoKwT:K~9V}hecJRQL`h0XzQRz9?K' );
define( 'SECURE_AUTH_SALT', '0wyfDy mrXyDAlPUIy|5N]`g+_b)~#7@CGA<%P[HlaxO0_-Lwj[6E{#g@BLy !lQ' );
define( 'LOGGED_IN_SALT',   '-spuPM2a35{yxvs$:U;c}&(w&R&jZfRq[W+97[t0S>SuGC+ejoYFwH^J>yV&3^=g' );
define( 'NONCE_SALT',       '[>).e1LB1:wA&>lNVbz%V}SItfFrYW;BL-_*>NN `<Rexv!PxZ`xwC-*~uLDUUD~' );

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
