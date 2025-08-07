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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aka.footwear' );

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
define( 'AUTH_KEY',         'u9nHhp/A?aW~3lQ# l&i=nwEPgx%X{Da`ZL[pi#l;p1wz~Wa]GZ}ht ^$l]eOZ1V' );
define( 'SECURE_AUTH_KEY',  'i4C(2=JZP/U~w*M||*:|)n9~OFHTJ$j060-ST}1nrRX@x`DPoY$&yi(?p:FtH^_+' );
define( 'LOGGED_IN_KEY',    'o@S=7YTUHBX&;s(ySna/W8+1!f#S$nk!F(D0<R<Eb8QZp~;P+%A4:!>zCycO@zDn' );
define( 'NONCE_KEY',        'w~DIzUcJ :{RR5hzzaAkHyc#Vj-ZlB/f)qnsTRQ&MU>MF9V(WrMJM=96|lqi%3[E' );
define( 'AUTH_SALT',        'bp_F&KW26{a>5?bctdIE$~Vv^jSg7g^F6Z]Eub:I!ma3`+yz< *Dy?sp)w0ll2.%' );
define( 'SECURE_AUTH_SALT', 'lE!&m|t<uR#/qS[o% z{E:AHg6XX<4N)X#!tt5jB}^Cic/[D}_9BQ49H1ym~5H7U' );
define( 'LOGGED_IN_SALT',   '&~?PIyVkf&!zw>?a?V,IkMnbmZ3,X%b=g|D![-VH{W=yJN{EB,iklm%a1sTDY{cG' );
define( 'NONCE_SALT',       '-2V@tMz]S~w,sHcy@8<]m2Y6sF@70i_,a;4E?7fc}M#>Tg/hTO-#ElMz!^C:WraI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
