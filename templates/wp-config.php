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
define('DB_NAME', "{{database_name}}");

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'WQBfCr#>byCE:(=aUtOBG1GhPaQJ6BV*y^a}YU?n}?1W]OG:h3o<K@.JlR^y2~;9');
define('SECURE_AUTH_KEY',  'Ac&S#rn{+T_@y#WStHLJGb?3Kg.r|3*4BE:qPA8{ji|nX,N%- wc^K74pLP~x^y,');
define('LOGGED_IN_KEY',    '.;7&M_G:M[F2AN2UmoG`/r-i^S@K@c?rx]JwKE>s/Kgsz]{q)E*sqV[&,<onJrAn');
define('NONCE_KEY',        'JkPbG*? !xU?NS_B%}!R0w%mDDy0OMFm_EhJxx ~k`OEat/<C)^SA=O_X@7YC(1^');
define('AUTH_SALT',        'BYt~s.aLqBy/6V^iCHy0vYO3S$M#ZL0(|Ge,e6BAcSM +9!jV2K}hb`Db}cVr(^[');
define('SECURE_AUTH_SALT', 'Z!i(S:dtC@D~{~}AZe1o+6]E:$!hzUM2<1>Z+oFfWM*iH)eG..hh.Y6YdQKu/zx7');
define('LOGGED_IN_SALT',   '3Q[>l@(2vP?n4DPxs|T,v2l3ov)&5#ZL^+D:;Xz1G%5X.5wYfX5Qbsi&e;Ii$JDP');
define('NONCE_SALT',       'ns,W{g?V&_T_28DqG+9#Pk`V5I}yE<u3ZGy>y/9hllDc-8[CAL1X~A]aJs 6y7}B');

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
