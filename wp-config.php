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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpBootstrap');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(R2jW Zd#0A,UB~2FQU1H@%r.o.xt=Ah{fSTC*ZKPOv1F]2unn{gm*%QZam|K-(z');
define('SECURE_AUTH_KEY',  'M~rMR]4vnb+>v1_a<A=STqBp.Gq>y;PEX&C6B?YgU&37M2XEhdalrDq5j;JxP>d%');
define('LOGGED_IN_KEY',    'ZPJ<O%Oi?W~@6Oli7b};SCi~ds~0}m>^&hab0am2EqG/qd^%f={?_@v.rS;tH+8Q');
define('NONCE_KEY',        '0w,}MF/<bl>(f9,BKZunmDV#Mdy8Fo3fJ>ZJ!v7d4IriXU9H:plz$g.7[fJbB;{L');
define('AUTH_SALT',        ')VCi0z/./RT,>B#_B$K6ru~ye+5wE2r55a~PZzUD7r?SEnG@2*yJru%&H}o9JYMA');
define('SECURE_AUTH_SALT', '})!x]e9Q>wl9:}2D~mw,uJ)krMS1H)NmU:TT[1zUmTBBLqQz.)%bm@n.=k`i2b4~');
define('LOGGED_IN_SALT',   'g^SNO|nnaO~8vEj.FxTY5&V(^mKUb|G#E3{}P2&b:sG[$w</8EZiOIE^)PUl@51l');
define('NONCE_SALT',       'ObF}0{A@vtM[a-.:oq)AGpswyi!4T?XzJ3SzQNTD(P-3zc2F$ub75Gs):k&Fmi0g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
