<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tonytandeski');

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
define('AUTH_KEY',         '6Iey|/[#z|z3HMkqUY~|!2I)4aV|i{ 1dl~Su2AHG`&GrZTSB?GI4NtH]5jf!XEv');
define('SECURE_AUTH_KEY',  '[IwGXK{}bn.u|L$%G/-&<B6t%mj9m;WgQ~5M=? <&orXw5Q%_{UYR1QhBQ-yR|2]');
define('LOGGED_IN_KEY',    '.2 dKZ!C0C2X$f?R{Oj$?]|oZ`fd$t6MX+~H<OF:kK=c]XisWE>-a&;V6j c]VpT');
define('NONCE_KEY',        'e*:`+5Cg^sc/4(x3Va[:4$iH_lf_ b/L93uO|W-1 #mh(so=R-aHVc.|xA~ey0+/');
define('AUTH_SALT',        'lLI0P.806~[E@do@<l}`@ aLwCM<+M$%Y!BNtP3hcy$b.6rqFg_[!fvO(ae2VwbV');
define('SECURE_AUTH_SALT', '8+EGp>&V:JZ01}6S2?zOd:V?BLKqM~1]EY8+a.#[q=hm[XU[QyoLgo.1`fx+@0*!');
define('LOGGED_IN_SALT',   'HV*78L%!q[+T~IrX#497sf*uG;8g_QW<wC39NwdIA[qxP_XDysUp2eP2Y^=!ZI]Q');
define('NONCE_SALT',       ';~#:Ppgn_m+Ii<~eV2x-k|-z{Bf-$orb-M9dgu]vABS*B%~vCRG1Qiw+plS(zF|h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
