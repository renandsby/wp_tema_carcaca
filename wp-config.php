<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpbanco' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ei8Ja0Vq6RygkkQ&__LzA)X$; 5V>GMWhu rVLFC@#lKVwuKUS2iU5yzOf6C)Xoy' );
define( 'SECURE_AUTH_KEY',  'JALPTVBsp$+`L=3kIHDRs!3xOyK=L^lSV)*MhzczI  )Kmp4Ivf.3A)TRv7/$?D$' );
define( 'LOGGED_IN_KEY',    ']&AsW[|BFJ[m2W)umW=k4]Sk99IY,lL_6?yf(.Z?`49=|f~D%*UX?meJr[sFg0H;' );
define( 'NONCE_KEY',        '8ti}cm=RCX[1sweu`: JgmH~toSQ2AG%RCBW|ud2@7T5hMPmx=HbwU7JBMJ8{.[D' );
define( 'AUTH_SALT',        '}l[@99SrKe*jO ^&6alWcy1jxJHa>Q/2i6G./`iy;$xuJ,Ii4unrKHj,{on,Q!@1' );
define( 'SECURE_AUTH_SALT', 'z)*mYdFR}!{F,>:VJ1+2m}YU*_)%jn3$<q}c>Kq;/)K-pu!{gDF?i3i4|-_KmW>h' );
define( 'LOGGED_IN_SALT',   '=|+2rXFHCsO>8$x_z29mp;=.7/F<cUy?1BA:!5+:992oH+.S_&>IU:0#:&=obU@h' );
define( 'NONCE_SALT',       'b{0[3/=-Q`^XpE5c>>>P?5.paFj.B#Q#>5?K_alj?)nu!xJ/X]}%U}Fq^zj@k&fo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcrs_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

