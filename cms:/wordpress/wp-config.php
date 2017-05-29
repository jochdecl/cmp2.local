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
define('DB_NAME', '1617cmp2');

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
define('AUTH_KEY',         'g]kAfhz/w6pd[2/O+G<q B%B:0T _*ix0Lpc-{n,8zAj;Y+8h9FZ~3+F})#f&[==');
define('SECURE_AUTH_KEY',  'BMbkYph}Cd<8PdXgrn.c;I;N=usb1ik.6JOT?_uZ/|r=}n_ZZU<cz;XdL@%Nk%2V');
define('LOGGED_IN_KEY',    'k`?SMB8mtp[ @&XxZ{_s)VqEk?qveYu4xHTr4OY4=v%?^vgDdxrY6ck{Yvol:g{%');
define('NONCE_KEY',        '?$Nb{)_6wSZ;yq25-:-{|~I6nK4Q@rM8t:Z;{p@.oX]NBk{X]/Q G0 VqO8X.)uJ');
define('AUTH_SALT',        '84+/KXYx$sX=%tj<P(lqnz|pq3_rG;=^*FSM~yT7aQrJH`Bu4+]X1JP3L{[`QcV,');
define('SECURE_AUTH_SALT', 'NJ30,!-QZs-gD|%+60].%CnU*4.Bq#ps,P^=Y2*i,K6-D>1W)X]!R(l%wD:_<qAe');
define('LOGGED_IN_SALT',   '?j+x3CM4M7hU]TS_)9C5dk0 mJ;nI>=qtkBT(A#uDfhNRk;GG?hjq,.!),uVUl~y');
define('NONCE_SALT',       '578v%Rg*!+;UmM;Vr03-RY|Rz.N`3Ws66u*zwe1x|P7/NU&D:B(XP-=:pN5:KB(_');

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
