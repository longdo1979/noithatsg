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
define( 'DB_NAME', 'noithatsg' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Longdo123@!' );

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
define( 'AUTH_KEY',         '}/HlEgU5HGar`Kvh*K]Ph98~-8]Q1OapX$oBWwvDy6a=m:`[EtK;E3ue~mc*=e|H' );
define( 'SECURE_AUTH_KEY',  'IpjwA&OcwK>hF?l6/``IU#M%*qn0+cS$-Yj7y`+/;?eX^#avHXh<$|0hr}r<ovRZ' );
define( 'LOGGED_IN_KEY',    'j/.-5.44wuBDGdVy@?P-WM.v:~>7J;#k/fnx^QKq?_3.]MHlFU]R:UjkXK^#pFSm' );
define( 'NONCE_KEY',        'vqcohQ}=Z9Vj*A^rFW9mcM}7BIwV]MFr]eu}~yPYXbE&NfkWr}6cVZWFvk~475a2' );
define( 'AUTH_SALT',        'AC|HvK4X+&v2ivEqJ=EW4DzMjUh,Tx)R,}[<%m;rA1p+ey{@G^ro]uJr U SM+r[' );
define( 'SECURE_AUTH_SALT', 'cWj{.~w ]`Ee1)>FO}ND;6WFPKlQ4`<.4DB+(0|<:$2:Tn5S(]XA #Oj!)Q~b=#>' );
define( 'LOGGED_IN_SALT',   ')RXWtO(]%Nr>T-X_jr5f[LD>9*hQ,0Mz@v xX)lgT- ^`m]>m4LJAh8bVQA?r /%' );
define( 'NONCE_SALT',       ')ZmprTy2X2)Kw{DH+-J<Rw|]3k42_i(Qx!vfSs|tl@~9;wD}[tm^4LcvCI]FXJWo' );

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
