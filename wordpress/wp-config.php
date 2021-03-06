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

define('WP_HOME','http://theshoesupply.com');
define('WP_SITEURL','http://theshoesupply.com');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'jonjon');

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
define('AUTH_KEY',         '[7CFa:C7{dDN401x;wz*wp]wUEPkXLX%Xn/N+Ax cALop`2/D!YtYxQLLp8&wo|)');
define('SECURE_AUTH_KEY',  '[H<z+7|,X(*}@mIO+`OH(.qGl+.L~H-306&XI~?gO<Q3uQ@6sSE]OqpkfMZ:4b|h');
define('LOGGED_IN_KEY',    'r+eS4Qu]ZwB+IkiLZX7~!qURl?&RRqQ8d[oK0s@q+$w5d-@Mgtb>aqhoT8R~`e:q');
define('NONCE_KEY',        '8>+g<8pS]trGsX|qM+{{p3@w*A]c3+<{9n$;$[~}VMRa-EXtSlW^N[1)y#|_DNiY');
define('AUTH_SALT',        '&NAN5Ub_U1Slu4f3)|+CPunz>vc|?mIb~.L@n-f]SM5$NcPFO0U$C)0$Kz40;#Pj');
define('SECURE_AUTH_SALT', '-H3xN9Psd1{N9qZB{t;RWW!+v-wG!pG!nbEn:]z!]xMi1xOt47kTc:tVB+Yu+:4F');
define('LOGGED_IN_SALT',   '+fj`8<<D3k=R/5:r4_NDb,^ez0kbnoI$(]{=%a`@3ea:K fRNM+B /-3$_TL`11@');
define('NONCE_SALT',       'Q8Ue+&N-W49iF+ho-kuN,w0,@>=:Fb*o`VmZ3}G}=u~y|(Mdo4w 1V>S?sL=A6|z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
