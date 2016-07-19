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
define('DB_NAME', 'vagrant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'IgbkLX}nE.]7]<Jw2]yQisL4PkRQ}Rd`/11ut |9.ttD*SgY`8Qx[~vH`;^T?dYB');
define('SECURE_AUTH_KEY',  'C7l_ujC(^s0$f< l8s_7QKF31?b^wpc}wEV;jC*?p66+2cU0u_b^PPA^Pl}@]RC=');
define('LOGGED_IN_KEY',    'uEn}y$+3lb;i^d(cT}VMk; !46b.<-w{Q}yon`^_}%)JeNV 0}}9h&Mt|;}:qNBP');
define('NONCE_KEY',        'GA7gkT ]9[h55:F(`hMk,r*[5Y=e7IZ*i7aDH9Xk|WoW3T@8Bo>>{2LCJ;gA xVS');
define('AUTH_SALT',        '{E2e M9>;>C5YF8A))y8rar)f738!r,E$?cMe44=c5;+0,OtknHoK[m).##z|6qI');
define('SECURE_AUTH_SALT', 'Fw{I+Bz#fw_gyAh$ypC_3CoZz!ecr(7Yu*oe`LeO&frBBe>L_J;am`q83F[bFSgD');
define('LOGGED_IN_SALT',   'OM}9vIMmDHrtx7K/19XR(:dt02JCj&4*H6miW`ns^+MYNRR}d`5+,HE=u=MIizxD');
define('NONCE_SALT',       '<:6mA>tNhYMr{Sh4k^Y])Q/0O|g;?+a`/s_`KC)hDZj]A/TIHR&,O$Fu Jpq_%#f');

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
