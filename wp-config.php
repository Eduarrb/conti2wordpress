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
define('DB_NAME', 'cole2wordpress');

/** MySQL database username */
define('DB_USER', 'contiadmin');

/** MySQL database password */
define('DB_PASSWORD', 'G3zHvSA6q7dzeqeq');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '?pp-/Nm7#`|<+ y*TGbL:rbgTQbx9Ej{j.GlYab{jawReiG42-Z?|-#B`IEBnm.8');
define('SECURE_AUTH_KEY',  'O$D_+Rs4#swMo+T<,dm;3f|%c@{XMTK}Og*,@c@tYZKE@4@YGv#zSQ7Ml+*Ycgp;');
define('LOGGED_IN_KEY',    '$uh1KkK+UwpO%<pn4dc624$MeNgYFR;fEI+?>E^((yY-}fCPd^+{|Z-FX.A6&Eq@');
define('NONCE_KEY',        '?_SZPtm:o7^Fk[/{u!(t]#lG9!L$HzqUf++s=E5=2Z|cPn2D6e{/OLDnakV+m=mL');
define('AUTH_SALT',        '(!:P{q.0Xxh8xrK(9L&-ui,o^r!:{8Y2_HT GVW3cm(=R`Tq8&Gt`b;N>Yvv-(E1');
define('SECURE_AUTH_SALT', '|9UYr:vnD,uAZ|!AAzzmi,F#i+*>#0SjL)|0 K-Pj9F`4hY_L.lyExn/X+qlwM,U');
define('LOGGED_IN_SALT',   '1]SfQUT8BeW.2zy: 4<,f14VKhKh{;1s9Q./8TbC)5FW|REZ5&|AyQ1,C] +~>1z');
define('NONCE_SALT',       '17B%|5u:UwCDF9F<u`8z,RhuB;~FHh:ask%?T]X_&H()19?Th1F&NL@Q*@A Q:Z8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbcb_';

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
