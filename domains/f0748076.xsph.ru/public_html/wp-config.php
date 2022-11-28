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
define( 'DB_NAME', 'f0748076_app_wordpress_0' );

/** Database username */
define( 'DB_USER', 'f0748076_app_wordpress_0' );

/** Database password */
define( 'DB_PASSWORD', 'x5pawJ9b5d' );

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
define( 'AUTH_KEY',         'BO@MW-Lu6!y:,BSr~*%y;w[9L64<%;M-[[d<IbDzl-JA,1tu#RM]$)uE2{bx+iCd' );
define( 'SECURE_AUTH_KEY',  '>OQ.%],eWW2k`9#).VgCdOvj3n,c)+ZySVoBeZhqMv|SqdqlN>45DJGJv~`[Bg$&' );
define( 'LOGGED_IN_KEY',    'Ne)DJcZq5ZgTW!8bWC#t7<gPC^[iEPCjp&sC}Q6O.`!:U|(B*0Oat{2x{(j9{m%f' );
define( 'NONCE_KEY',        'k<7488./WK1+lu<;p(Akd*h_?,pcS7xSjdYBJR=r9{W?E3,vPflzV9SR9cGL14}i' );
define( 'AUTH_SALT',        ']|eQ,darN}tHgMnBD~{jT_CzA~c4,Y8342JZ(h}9Ew?{:`_y2!g_*Xb+L:}s{psD' );
define( 'SECURE_AUTH_SALT', 'i%ey+{6,4l5f}nt]K, muz;98L#>H8m9Dhr9sGLsD .wbE1.N~F9h!7hIgtt%oaO' );
define( 'LOGGED_IN_SALT',   '5^VtXT&{$Kj*Q4#^[js<0OpBB8~ :NUsU/Dh{c#Q6*V`S%=_`{U;[ULW9?c/1PPI' );
define( 'NONCE_SALT',       '*#p$hM@c9BD-?8hI?Z.lkoX^7^qysjp1q~(^<#Pa:I0K>fsToYX{>[|4#nBgElnS' );

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
