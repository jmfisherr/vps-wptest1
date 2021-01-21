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
define('DB_NAME', 'shawn42_php_wp');

/** MySQL database username */
define('DB_USER', 'shawn42_desouza5');

/** MySQL database password */
define('DB_PASSWORD', 'T0ronto@2017');

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
define('AUTH_KEY',         '<e62tv]4$$fXRy]PCB2{4^uz$@p[m1yxd2q|!h;?gb{;,gqFJ7nvfHRc#T.F=IB`');
define('SECURE_AUTH_KEY',  '~desOHpwVuG?zbxr<u]g*p/F,>#a3IxZ:Pp ,6_cu%!2Q=#Iz482E/85Y9pGteR3');
define('LOGGED_IN_KEY',    '!Yf-D;4_9?03qr=[v.~G?a~pEIxLo(vGA+A3FG6_5LY$MHkL5@&L(LHhkQLFfl40');
define('NONCE_KEY',        '$H4SX>.?l+*/)7dSCIaKzf1?yhhGd5/u.mp0taUZu?T1AVr*+@:[9iI9PV~@0Rhm');
define('AUTH_SALT',        't!8@O4s%C^z/9T1mSmhM~%l~2,ZOK9d!z7AE*M?xWI{D^C)^4%g(g!K{n1k(oQaD');
define('SECURE_AUTH_SALT', ' ^50KQgg34Ux<lW`iv{QI8Y>l~7q,2=y)CORRkmSAV(|aidW*LlSlu3.o= dcr{k');
define('LOGGED_IN_SALT',   'a1Ms/`@4X5u[FFLpM(`;K0mTir}0,~6YLib?GmHVE]/$xZv>15OhJRJ(p0Bg:!9s');
define('NONCE_SALT',       '5`[cMt!aGI<Nts?(h}r UJ+ufj&b}|ME~fX)~~I`*EEJmmg*_{3gaf~0PiCe#Y+T');

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
