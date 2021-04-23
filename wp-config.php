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
define( 'DB_NAME', 'test-project' );

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
define( 'AUTH_KEY',         'R-7evKuyUxxs]vWMrgKw6D*AiB=&R{~n3/Wh9B_wl?reA i<u*R#Voxdn-j+Y`Av' );
define( 'SECURE_AUTH_KEY',  'WKnVw&qXv0t$aUd_Xb]4f)q$vG//a*8|0W8Ys0s|v(o++E8ChCx%qd`q<Uhw5.UK' );
define( 'LOGGED_IN_KEY',    'l{0t:;Vt*$=~)]L#^s|#CdV<bh}CX5,|zGvY*P*q?!)*L0+3A`>rm&_Q@lB?!rRC' );
define( 'NONCE_KEY',        '-6BjJ<PL$N *Rl^j1I$EN@Y[~&?4D/J4l?Z_i!w &oI(`I^)]J4Za$Z^V^K:s4lx' );
define( 'AUTH_SALT',        'jN9z.)|*rBQP-oU4>3DvPK=LPNr,*u4[vlC>0wejJ2[W4y=d#E{mFOVa/%AKabop' );
define( 'SECURE_AUTH_SALT', 'yQX+L|dc#sYZ>d&proyjp}Lh 59a$Xkl>tMC?WB;@I(wK_?j|2vvA4wpwZY:Et@c' );
define( 'LOGGED_IN_SALT',   'N]$GWNzwbn?5Vm|K?T?MPPD~J$k0?&@M4T.^RRe:BYu}qvcb>.XQDoZ~>xR_p3i(' );
define( 'NONCE_SALT',       'oQ[}k-(C_$q+hkiZ%1abDqx5N+oq|(PJdWD-C39?<z$huKef5q^I6X{{mg,2a~^{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_2';

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
