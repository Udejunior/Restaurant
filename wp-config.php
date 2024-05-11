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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Restaurant' );

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
define( 'AUTH_KEY',         '^gb_{jwX<ohd-F/j+sm,=T,.Yp`R?=i]A1P>JIGY2kF&mO|0z2@(LW]Cb+OSYRiu' );
define( 'SECURE_AUTH_KEY',  '>$!fCotkh<EbBFP~3$l)y&g0sJdyZ<*PI8OedhDw.H}G1nG^ftFk8!Cb3{D~! U=' );
define( 'LOGGED_IN_KEY',    '%72kXPXcN:(GA[h61NOolZ;Rx^(uUtE/?b=!+4j|{5~?fCj@@7g51kYp>+vW:Hhu' );
define( 'NONCE_KEY',        'sSxnQQ6qD!.,1U:1jBFy%6T2<a m#QzGQ!n^6!M|/&PXf%mL?nb_,?{[n1_RA1B ' );
define( 'AUTH_SALT',        '2wM`b lrzwkmLRTSL>)t]URQ8=oGD1M12{M`wp>*v#+p-]g[e77cp@/73HxA4-E1' );
define( 'SECURE_AUTH_SALT', '-gqtMp  c3:MC}]`6okdehJzAAF%O:h`d[b<6K1II$[cRkQ7V_CyW8qxDb.=B8_!' );
define( 'LOGGED_IN_SALT',   'Nmlm`YH[s%i fo8xeonMM}b*.82>1MfO>Y)J8}}C$}ylzv=Sp~X[XvX|&q5xYSB%' );
define( 'NONCE_SALT',       'BVE1(zNcNh<@3s2F,>Sd)[o2,}qB[oW/Cm(aiuD5$CYU]~/`P6_oU+Y<?CPz:Y4f' );

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
