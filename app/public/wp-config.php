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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'AP4BSM-M[r$lyqMznPN3SU1?`pq~D#Z$8xI.=e%|C:>71W>!Mg} %;lh g<oSPlK' );
define( 'SECURE_AUTH_KEY',   '_(+^0Sj &-q>BVv;Q 3#(&qc%>|&MUM^xn;BzvQh{wVsFT7wD`C;@4|kpp~0acp]' );
define( 'LOGGED_IN_KEY',     '~s2[4hBV4CvJao;+HsY$4Q:k=![`uoZB( 7WT:KJ3)sCao9Rr_;.(@b7$)R|ME&h' );
define( 'NONCE_KEY',         'DI3?~z$YwQ-5^_mH#xt0u@}`vEPU(l(U{p`D4B)*}D7!^:`1SNl=QVY.Xp]R~$Kz' );
define( 'AUTH_SALT',         'uSH0O }6Zf_p4P/uIUO#7}Bo9~Lvx{H^?<T`x_riUHCsX~D3DJw$8S]L; 87?xQs' );
define( 'SECURE_AUTH_SALT',  'uoxGAYy>m-walLC9{oZX ff91s%)8=QeQ_$/up4=loASZ?QaC[*iyawMc~y5gHXB' );
define( 'LOGGED_IN_SALT',    'R]oG_+S`VoOnxChdWi/<8IpECt(:oof#rlh(5[Ii6s6oVo/Dq`}t?5oq;5-Nj!RY' );
define( 'NONCE_SALT',        'P7TCq2Q%8ALs>EftUw{c2hM`coG.oD`B-)$g:27[_9EM0:xJ-CaJ#@8KxKezwAnL' );
define( 'WP_CACHE_KEY_SALT', '|eR%B,q}d?Y4YyYGT {^hw.}pXgs9UswjKt;Uy{Xbv3QnX[^0MSeto1{y@r^ss0H' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
