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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'asusasus' );

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
define( 'AUTH_KEY',         ' }?YWg2T%1>w6~+8+HBC6i,q4{3ZJvf@@w7vj|g9-?PX#qQ?!lofIav{Lus6#8K;' );
define( 'SECURE_AUTH_KEY',  '#z97,g>xx!2#)EYh!(y8=GL/`%U;Vg#80x{cUJU%Ni4(WeF&5i@w/@&bO{ #7N`]' );
define( 'LOGGED_IN_KEY',    'K?M_ax4!=F&p;p:S64;2_<qgH_/kUD}pbbf)[XNiER^;=1&sIT}G]gaN?:,c1glY' );
define( 'NONCE_KEY',        'V#1^6RHSg*Go}^]uy{@@Y.Fuxx}umiI_pcaSW@dIm#KC.Kfz0NKppAKFE^;Nd2%4' );
define( 'AUTH_SALT',        'nhHXpn>E${zc$@-IQwq591*-:W:KkvYCdrqUWi0_J68xFveNjqToV0zVXlHxoLJy' );
define( 'SECURE_AUTH_SALT', 'bZnnqv4ge{ps-U*RTX}wxY6Yrh$./-Uu4yYD=WalNu81<tn}LQ(;gainR:j{8k*9' );
define( 'LOGGED_IN_SALT',   'Zp}ZJ;aSdO).*VJH/v9@mB,]XMp>+,/qF[lF]Av5K(C(_2G}7C`vRiq8UHijmd2z' );
define( 'NONCE_SALT',       '4D8b,-y!H1I$ZQs:G?c$6]oUE>y:89%lmY5WiFGt1LM:,?Y}vUIpzODyJiJM#*[V' );

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
