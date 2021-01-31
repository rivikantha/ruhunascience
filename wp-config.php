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
define( 'DB_NAME', 'ruhunascience' );

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
define( 'AUTH_KEY',         ' rXRaW!Q}p!py}?IA>AY?ElO[!OA^:JOt9?S>z+DfNYii#fA8gT;S*i3bZn; {e<' );
define( 'SECURE_AUTH_KEY',  'ty6BAGXU8WX~$)vdG!d+v)1rLX/^]s8+s^]yh5XFrb ocIc^0ZI`E8uv; 8~!cS]' );
define( 'LOGGED_IN_KEY',    'FVXedqBQtkQ^~Tqb h2|GR=]Hd.+[%fS&oasVILM#0<@/&ri7*g^BSvT=90e?8(O' );
define( 'NONCE_KEY',        '$tm,j)#1n1`xuU{l3^lg=8Vg*biy/2>F9-nu~x^V;fQM/v@;F:L>x!8tj$]i8W<;' );
define( 'AUTH_SALT',        'o,F`q8$_cjn6{.x(Ii}[X5$uH[_Crql4a5.Jy&e-&&fOE8L7>`%2CM0 4 0~6y!C' );
define( 'SECURE_AUTH_SALT', 'Y>.JcBXr[zj7-Z%T@&PWLF:wJEsQy{sLS)3v}QC9lUjL]e}mxDaD+6/{F_x|a9>;' );
define( 'LOGGED_IN_SALT',   ']CKFo?@L?|]Ki0^A ZmvfI[z7=@Px91s<EP>00#wN4HN8@Ka.E!ctD`#BJjbu~=N' );
define( 'NONCE_SALT',       'vVQ6|)dB;SQX^|zxEFph<YEj<ciGZCaxY4mX_}x0[W417U),D9>7fe<^ok(f~4Ci' );

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
