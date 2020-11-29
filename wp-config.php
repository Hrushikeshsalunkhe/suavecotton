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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '#U*Rol.eX:?[,*n#g&S_>~vdse@YAGA5{1Het*8|i8kw*GUnko?%[,1XbJee>(0|' );
define( 'SECURE_AUTH_KEY',  '1uS}ade;KF .fE<M`7]31~QQ.hYhFza~.B.t,AE$eDgL6-@`:IV-AFB,xVz>+L:?' );
define( 'LOGGED_IN_KEY',    'p##I 2A2_>_X}$T;m]2: M$+&LTC^) uhE)`N+3%5n47^G!tGj5p#tg:hU#6Qe{6' );
define( 'NONCE_KEY',        '4NN~ieuz0^0G`=aFf]bxk1q?/*UH;kls_~VAf(crEk,yP|1.|OtfT&SVgEpku #5' );
define( 'AUTH_SALT',        'H|.6*hG#!%P&kTc5jNaeEX.Fw;IG=?6|x}SFK9ZBZu!;5ZJS#F#d*#]-fU/=4AGo' );
define( 'SECURE_AUTH_SALT', '/ifnC(n^J`U&KNh|6F@TCqm2^0CfL-=EIZNA(p_=`w3sd,_X[VbOB__)1jlk.Mwq' );
define( 'LOGGED_IN_SALT',   ']2z;BP$Xx~8_@^fHzwE)k1sciPh+tQi4t!I*&(?X~G.A6n8ZgLT10_J}-D[=7<N8' );
define( 'NONCE_SALT',       'g+v-Owt1sgY  N*&Mh_jw~)V.2=gSe::T0nk_TlBh!C.>!eh}JXU-fFDKGq8fUFM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
