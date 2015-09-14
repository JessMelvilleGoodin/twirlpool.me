<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'twirlpoo_wordpress_2015');

/** MySQL database username */
define('DB_USER', 'twirlpoo_wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'Bear22Beardb');

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
define('AUTH_KEY',         'u<m 2D[g$lIJ56c_>B-4q.wA9e_.A6}7aIK0sj7czv_sPIetOq))#Iy$(~#@%VTl');
define('SECURE_AUTH_KEY',  'AS>SRJK;C`%3:z*jiJ+8IEc;f++t|VF:Vf#Co$CR=|E75SH02CoCM>xr+>w0n0-9');
define('LOGGED_IN_KEY',    ')S7~Z-nkzUNzsFFy`=3U+AQ&FlQ-I|Y34|a$k4}xs%0{K. AR/,0)@V1NqL%<%@Q');
define('NONCE_KEY',        '(-)3c:1O0;i2DAWP|:]A-@d{_+Vh}NCi|Kvy}f}o]K^g/*!Wy)z}K_k}U67z*5@L');
define('AUTH_SALT',        'V${z;udBG5vz-6SGQ,8*V9m<9-!sd-|7mLvLAB=Dt9.d-G+P1K1X6oToV1H./do2');
define('SECURE_AUTH_SALT', 'W4P78wZ&nSVo/}=&ar[OvM+j^0O.^H[&lps3Ek`?L}PB*{Q/?2G%{,W:rCF@*D;~');
define('LOGGED_IN_SALT',   'V$@lI&+4K!`$-zCK)&gy0<Zs>S.<jS}j-x~fxSsQ*pl0_*E^Q6;R,#f4SeVA(c{U');
define('NONCE_SALT',       '7/kSZ(<|wq{&i`f}MGZW)~%l#GHBz__x9$dIm}?y|66S<,/=W>>NC {2gqs<GOwo');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
