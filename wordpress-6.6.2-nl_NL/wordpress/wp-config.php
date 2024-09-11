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
define( 'DB_NAME', 'AngerloDB' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '^9:44#j9`EW]TM})7AT%ve|]<W#bVRlz%m%nGCFAyV)F2Ad_k5PI8tnOlN@11GYh' );
define( 'SECURE_AUTH_KEY',  '^N9<WNiUps=J,GwXcElLDMDY:b|a4bP?|sHxE`^ESN!lj&n6^5dMp1dz7m):p%}[' );
define( 'LOGGED_IN_KEY',    ':fh09yO#8MfghVfQ]{xMQ.VhWcN9R.MsIg)v! E/e,K}JJ]RH84x7k:eJ{[x$3XG' );
define( 'NONCE_KEY',        '0uKM6RTnjAKg)g *vtq3f$;B~Z,^3~^EeP:Z?-79KVC,k]FC69?97E1D`)Ap<oE0' );
define( 'AUTH_SALT',        'r9VXCTFJIy9yR.U5FaV0_<}WNMRg+Ds);NWO6SP`(6H+K^1>@0RKJ.uA1?m,BDmj' );
define( 'SECURE_AUTH_SALT', 'Jr|9Dxo_2-wc1&F;uh]9])n#Z~A,vs<Ht},wXP])l(zlA0]~P,[h($_[&y^+{qnC' );
define( 'LOGGED_IN_SALT',   'TrmYssXbqfMEtost__AM;%aGE[&I|oT9I4HMV]j9mjw?gPeKryrl@XQF[9*Ao6`x' );
define( 'NONCE_SALT',       '/)ok?%C?Rvgz$,.eNoDRgc~^D~#1pnWX{7xk2g-Q5g/`hZ?IR}8%Bmw[E}F6m/Wk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_Angerlo';

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
