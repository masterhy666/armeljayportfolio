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
define( 'DB_NAME', 'myportfoliopractice' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '/' );

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
define( 'AUTH_KEY',         'jsW{/!@E]-ky/$l4HJ^-Wtl6:iKLDUvA[l!X}b9gQ!@}Gz|KP_MMhNASc5@a}_ 3' );
define( 'SECURE_AUTH_KEY',  'cJ$]$[)@HORQtODv/ZY+%fH!:ox5WJ409kjX8`Ih)3e7~UgYyzEe [Bq=,.EAEd4' );
define( 'LOGGED_IN_KEY',    's=^sYSi4XSD*q.O<X+E<?0bx)#oJ4p;]n}`FQQA0_QfR)?=P5}H@o6D^1H^,F.8)' );
define( 'NONCE_KEY',        '1~D%v4R.[cy[46tt-6z=1sBL*AD?!ow%ABD4; F;)<nE4*D~[l;}?{Y#b1&3Z/-;' );
define( 'AUTH_SALT',        'Y7/DT-~`aqLD:OYR{}H=CenIS%G)v+/^81!-w@F ([g5|DezMI,A/B&TNI!}U60g' );
define( 'SECURE_AUTH_SALT', 'O`VeFT6%p/~S}>VXIi<OS Z~:u*Pa*fpVCD)3=x3pgR~^b!z*}x|{5{okRhTwU`]' );
define( 'LOGGED_IN_SALT',   'WEy/vRWPTe/,c[*x-YNX3l`T2[[`=1ditU6tT3[y))9zxZZ/92v)kA9hPsvm;4TY' );
define( 'NONCE_SALT',       'ScJ4o=N/fL=L+.`fk0O1ltE,^ABNUe0)m>3w2MV+P4`b)><#/ZOS5%B]51.B}2Eb' );

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
