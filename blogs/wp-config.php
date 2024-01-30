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
define( 'DB_NAME', 'gcprodu1_baeru' );

/** Database username */
define( 'DB_USER', 'gcprodu1_baeru_admin' );

/** Database password */
define( 'DB_PASSWORD', 'Baeru1234@' );

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
define( 'AUTH_KEY',         ' E|@+}/kyEbWWk&XCv.05k$&W^Xk0alvROa^eKJb$ rd!BXKC;&!_BMQEm:ar.h~' );
define( 'SECURE_AUTH_KEY',  ']vQ->=S^J0d|Hq*baWdM;cW25u-{|PlZ}P>t|?-X>I}5Hk@_mViZ.i<q(I^Gv}Fh' );
define( 'LOGGED_IN_KEY',    '6uB7*(fxg7rkx1X!mAfumC^vhK><F3ZM4AHg3Bf<xdZrS,NY>$9fL)#`:~`8MDqq' );
define( 'NONCE_KEY',        'mBC?Y9s5vr3{HH|qhdXuZCHzT{,Bd)OO?K^aM@1&gCb`nP@_e?**`cgX}B=.2l^X' );
define( 'AUTH_SALT',        'l)s*g/fH.qlpD~]+_K@7E*&P.=?&qwC{XYeg3=5EqbjZtdlo =m%E:le(h{6K EC' );
define( 'SECURE_AUTH_SALT', '<S<Y?aUey7S^2`a)_QS-!e9GpKjH*Z|sp(A[QgOqc0_]:.:7#`1a`fdhcF:Z:p*y' );
define( 'LOGGED_IN_SALT',   'a;G`O>Y--Y1BU5kbUP2t%{r(NB:;A?wzp-v{YYz]0h>+7s0rS*b@JAj-kx<]s+Gr' );
define( 'NONCE_SALT',       'lTfa.s3a1?+K`wYO[UM:i*ch[PYf{]|m+{dRxK_qX{M2iupSEq6f?:Xd8n>ll4F]' );

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
