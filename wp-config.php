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
define('DB_NAME', 'findwaygroup');

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
define('AUTH_KEY',         '7f2!gUhKqt *[kw?~wwJHLN_f]<]W))~=c1Hu%lc)?P(p4$;RU`:e)~%(Vz[Qc<i');
define('SECURE_AUTH_KEY',  'lZ~:bD^f1:HlQy6-r~bViaqjlNnnY3eV{NyQ%2-4zvuJVB8}?BTc^kBkwG&XiN02');
define('LOGGED_IN_KEY',    'H0dC:`Q][V6Ou-NYI*Z:/dKSAxD!n@OX3i2b6a_m]ux+5z%V)9E!U:_4x,j{cl!X');
define('NONCE_KEY',        'lm/nGH}90JXJT:Zu835|!@%a0r)l|8;>*ebzpU6XlDy.n]QHq4v*n!s+0.Zj47UP');
define('AUTH_SALT',        'w7t&@-^O[jcB2+&#a739K<jpLwgJ=WkNpr%!T#k?+erxOzSiIlPYa,#zS48Mo5.C');
define('SECURE_AUTH_SALT', '0@*q0[W9HRo.)R6``;[+yFyx!xg&nX :wk84h]47p:#)[.H95Du^(d#t?P 7c!L=');
define('LOGGED_IN_SALT',   '/!JaL#;LWb@Yc3=Rj8d3t!(gsJcznk<tdQcP)nA)1N(>m1-kx2t0tkesN2=HCENh');
define('NONCE_SALT',       'krmaH&F6&2Al6&BTA:~T~:;xO:9]El=4~hxdWF(B )H0MaY=KMKM6Jm+fbjQlpE1');

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
