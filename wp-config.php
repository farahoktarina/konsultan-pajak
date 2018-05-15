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
define('DB_NAME', 'pajak');

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
define('AUTH_KEY',         ';N!k}Ao-SX6|g,7&qF1/Nw{|jYBT}iBdId2>t /ZL^M}(Wz48Kw>d3BS33ZXy<6L');
define('SECURE_AUTH_KEY',  'PjCqGAkn3sT*wnOpI~Z0Nt0_yM8LMqTm-G:9c?k*L%/>a5Pf;9a9/1_=) *Iw-e?');
define('LOGGED_IN_KEY',    'oC2WDHUUu=<fu>h-)3t_bzKw@3;#^H~]hdR3Hxu}o0]l}^${VA68wx^[>B7oN$`7');
define('NONCE_KEY',        'C b}xk4:{=JB7U&h @i{+30cJ(S|f9J*tZ:8.YB.WXfUT<(*]gjG+%w_;;Hc<?o3');
define('AUTH_SALT',        ',l;J:XkgyN=!;m+&G}a*t}+!}Z+C$)a1>xwa3Ks2]2qa_-5gj@l[*i>O8|}J)/Qc');
define('SECURE_AUTH_SALT', 'h`dhq|@wmF{8YG]{/U?Qeeelqr8<LJ(<Y4Tbd-%1@X<Wg|p:A)V -*na8w@)X_E4');
define('LOGGED_IN_SALT',   'L8o7^:-(i&+VrFA9VRJ5n?s0%B7gor##8z%{J=NdX|y&HsVTv*59m%&Q%%%E<_Is');
define('NONCE_SALT',       '?n72}/C~Q;oQ+<c#uF;=LU@QX33pa[gNZZYVJGvTSb.b prd=bSd-YFy-tlodL y');

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
