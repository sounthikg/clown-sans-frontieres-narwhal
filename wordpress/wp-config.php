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
define( 'DB_NAME', 'csf-narwhals' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '>jYoX=C[0I(A)Q(ON$/B[dE.oCu{th2XGcR7F|P:W=c+x]%m:6i;!AG!@I?Gcf0M' );
define( 'SECURE_AUTH_KEY',  'cosMvwOQvJl-_eEWJLTU{j:M}1^t56]^Rcn@9JSX/a6eIO:v452VQGuY7sP0tcDh' );
define( 'LOGGED_IN_KEY',    'pd?Vx[t9<xBL`i|AZK5Z#b0`Xo|%O.t]H]$>+rcS.D,G2u_Hc5Ds]]>@YkSHSb6B' );
define( 'NONCE_KEY',        '!U7O`RVjZv+A|OU/U|g}k%[=}=h5YPd!|J#}7lbJ$Kpf!#q?<:%qj$L[T#{7Vk+c' );
define( 'AUTH_SALT',        '1vDnL!1MuJ:6=a`B,CNl=Zfr6ksKd&Tz[S=h#r`xwmj^R{>Pkx5[}F&_#,#w/2Nr' );
define( 'SECURE_AUTH_SALT', 'R8k3U|@K6f&Z@e]HbV}5R5ivCH/I=Y2ailIwYkp[zz@fG0%T$pT}>kkY_?G w 0l' );
define( 'LOGGED_IN_SALT',   'J!czcCj[]ebhmEp4;@wyGu6,C)`FL/09{X5w>LdR+s:lA=+R57k$+RyT9Z`2C64L' );
define( 'NONCE_SALT',       '#r|NM8oS!}lLn^sm1ct! G*Sev(xL?hLP,ug=;!l7PbwMNG_!Bb{Q#`vJ3hZhCR`' );

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
