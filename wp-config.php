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
define('DB_NAME', 'local_idm250');

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
define('AUTH_KEY',         'd8r:a,P?y3&FVH`W8 W:Bl<GX~v>i|C_FUwW2j4a/1+03du|=`(t@{_v8H~Ake7r');
define('SECURE_AUTH_KEY',  '[Xc6g~8t $n7aOnhxs9H*:ArJ=)z!u|~nS/}twz5@LhSYCkcDPC %&n<jub3a8pt');
define('LOGGED_IN_KEY',    '`w,7pO%</}7zE2f7FVDyCAlz/-,%&kjU|-[S_8zeoysdi(ldjq}1yI)^T3Ry!jnR');
define('NONCE_KEY',        'TWSp[@X09H9+bu`XI_DJk?ram#q#it_-K8/3$GMknK_HsrB3XTBqNJti6(X`TgU=');
define('AUTH_SALT',        ' K z/eVBzVhAC*g%1K 8km%;Y I(c}xn[_OCR9?XK~OTu#J.iQuvxVI8MQO2B722');
define('SECURE_AUTH_SALT', '9!}<=mw~.d0:nt3R]1G`nq21T .Os@DC`T;S Y Vf&31c 4()FZyX*3.i3w#]z?p');
define('LOGGED_IN_SALT',   'Cu2?j#T#9&>Fb@MDOWU.|`@X#O0-t=x {C;#|x*c@+m7`;Ez9p.8;zF*).@o]EY~');
define('NONCE_SALT',       ':YkN,X}vo2odW4qcf}8]Sl.8%5-2_)p~aR60M6y_2:>P&e(l;Za(,ouq7](a{#+d');

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
