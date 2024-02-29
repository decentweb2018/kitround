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
define( 'DB_NAME', 'u155344873_Flsx3' );

/** Database username */
define( 'DB_USER', 'u155344873_DfTg1' );

/** Database password */
define( 'DB_PASSWORD', 'O7JYaR8lea' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '}{hkCkbt14!jef]v#@v|t3+J)L,!=6 `|J]!G$.zV#w4l]2^9v-_k3!.%HVDt!EK' );
define( 'SECURE_AUTH_KEY',   'D6.2V]>}S(2K{W>ns3CkdBiMfDRD~Vz%`b<q2xcZ 62Mf%[g]}RU9c:~B]0vIIm)' );
define( 'LOGGED_IN_KEY',     '*O>rCTkHE3=TJcNc*=}e;-f/_jaa?7;ox`:2qG3[Isv3Pu0kjdDcg~%w!VZj+X=A' );
define( 'NONCE_KEY',         'r}MHCj:d`S^QKTpD0xS.mnkV]bzpD~qisP|`BP!&!vO(d i?wq3F>4=07Maa7q=x' );
define( 'AUTH_SALT',         'Khb./w5bdq[,8=GQKZo8De^yVmLWlRk,{nO:WPTLMy?1.v:FHg`Y[G/J{x&?{!3V' );
define( 'SECURE_AUTH_SALT',  '4b@c..IwX2Rtw]PfW-XTGC[gYd<CfZ`SF@1,yb96t<Z;q%/o<L!t5m2KJq0<SI{n' );
define( 'LOGGED_IN_SALT',    '[f)m00Ks@?015oxV>Qm*DRi)eM-`cu4;{*k/e2a>X#]pSQ>z_t+cg91|-c-O;l=7' );
define( 'NONCE_SALT',        'izOXy0_}2jFSFOSx3WXs3lxn_1V<d9L#wPq4K3} M?g)?X_3+<CjZ]u5uv<}c<,;' );
define( 'WP_CACHE_KEY_SALT', 'my%3flXn%xjBTK6Sxk:9M@:^l%2*h2gBB6H;.~tg_uF,a_D&^A;JMXVKTA7c}Da0' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define('WP_REST_API_ENABLED', true);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
