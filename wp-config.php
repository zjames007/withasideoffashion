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
define('DB_NAME', 'withasid_wp158');

/** MySQL database username */
define('DB_USER', 'withasid_wp158');

/** MySQL database password */
define('DB_PASSWORD', '2pc1CS)!1Z');

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
define('AUTH_KEY',         'a2ch9li3h7y5sxmutzy78uhksfmx6faw1cmx0bdk1m99zp72auvdij7wsg0kjaxh');
define('SECURE_AUTH_KEY',  '1ub3m7mojidaroszdpg3hkzkv4nvsakwzud7klqpzakgdbtee5vmq6hanqut2xdu');
define('LOGGED_IN_KEY',    'vqtroq1coeu1gjxe1tjxwnct4mjav8xspf9meueumd0com3orwzkuqdrr5ojolqw');
define('NONCE_KEY',        'r6zbauh2rd8sspm37oy3vc8p61f5ti8fnbvmihbdxpxvu9c9blftkgrqhkrpmlgn');
define('AUTH_SALT',        'aoer8w30vykd7dv6wjfhvst914iqzqeskqlphikcbdwdnedlyjhiovdrlj878u7y');
define('SECURE_AUTH_SALT', 'b7uxkkj4muin0tnn37z3pn2czdj2ncwdvfmz9xbytkwsnqvift0guhghaubo8sar');
define('LOGGED_IN_SALT',   'zvgvpnoy4lsu1ypkqajjlvcp6pqnxe8sbdq2nwakgcgbipyrgt0dgj76k5oktyfa');
define('NONCE_SALT',       'n8ixqt8kxmpqqb8otpdruzia6cxinwhu5zooftf4yvp5gwosxxczv1veakiwzn84');

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
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

