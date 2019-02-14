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
define('DB_NAME', 'arkoblog');

/** MySQL database username */
define('DB_USER', '4rk0bl0g');

/** MySQL database password */
define('DB_PASSWORD', 'lifeware_2@17');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'B,cx&%zU@7hEsRR+E^N1!,=Tk1-SvMfE&FIAcZrIFTVTWm#xS)eFSFd}UtnEwz:<');
define('SECURE_AUTH_KEY',  'qIc7p(Tmo5MB2c^a_UsP#=$%A?J(H8/<g&{2@u&x7(22odMHf6^OvLO!TlQ%$##g');
define('LOGGED_IN_KEY',    '3g<u!?.[CoE,x ~*Be$fjC+[?s1wxT5OV`AtMA(+nlQVM<wL^HceH=v?71/P1;sA');
define('NONCE_KEY',        '|2Td=JX+t*E2As*r_izHE7oYn`1X8+rr!PDz0d(w^R-VFO07%%6=MOWR!`rAPK5%');
define('AUTH_SALT',        ';8TZkZ<tTV=Z - DX&).]2qsG:QeN&KXk:$K^ Bg%. |0O90yoPv=d88+-kHEK&*');
define('SECURE_AUTH_SALT', 'jf1|H+-Rt*~hcGP<RBrN5+-*;T?= s3(E_Zc/,E26$uh[wIa038NNXq=!{ceRs0|');
define('LOGGED_IN_SALT',   ';}v+W_)UCu4d u=g-v#hy5jN.A&_eUt3k1)oTo8-iO,b5Q^29MZFg(l!jtul{ROp');
define('NONCE_SALT',       '#qxpwW&^KB8[vd^h*QFX<bT(V7domuK#=+9]_.|lC~dme}X]9[|@AaHQ~6[^27|I');

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
