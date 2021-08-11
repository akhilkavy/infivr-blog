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
define( 'DB_NAME', 'infivr_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'w3q<&Bja !paAc}P4Y<gz]s^ka&1E(bm&Rt{=$h,ibf66_k*`-yFHs_(C.RRDP/B' );
define( 'SECURE_AUTH_KEY',  '<kFLwqn`%q78%d<:m|MDI{fR`!n06+o>@]B&] j>h^^U=JTei<psc&`1*:n)xA,+' );
define( 'LOGGED_IN_KEY',    'Wf.<}~a18--=ncj*eO63$X/fZNeJ=*OOA0+@^GL&*(^{JVA0jsfQ!JfL8E]>##}f' );
define( 'NONCE_KEY',        'c6*;cB4Vuvg+z 86y_/e!%0Vp~T;kP8qtP.ct^KaRNN6c`~$)lir|)^PdjE>U7M.' );
define( 'AUTH_SALT',        '=u%=]xMrHpf6iu>AO@gFQiwyMwRZ_?!(v]8F/i$A?l7p.8zp>KCm4{Ky1*Egg^rU' );
define( 'SECURE_AUTH_SALT', '7zu@A&:>[Wc!?70[Ak;.nOPQ}ZSsA~KUipzHSU.W~wP:Vqd%f rdj4[_i;chbb*h' );
define( 'LOGGED_IN_SALT',   'xrRv!ZV4=#iXqm_D<&9i`BA[D/Ajga;r]frDS_>[MUN`Tp$/-O*.P1v%@QYSXK*]' );
define( 'NONCE_SALT',       '0]2c*/k}mcjR0H1s!Gi3Aw}F}.K!R@`]1nR&Vw(j#-mAj8=e(OWPdbi5Vv5FuV,X' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'infi_';

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
