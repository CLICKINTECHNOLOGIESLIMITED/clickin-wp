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
define('DB_NAME', 'clickin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'L$,/%{OH+x7?P e6KVJ]S[+|sAD#.m$=<~:;Mg D,{8-wj)Q5^wyuoAgY-<W0`rB');
define('SECURE_AUTH_KEY',  'Wz95GpPPy#+XsL3{Qu6^FO`<aEV!@o. C-y?tm6OVek4z|q<%VAZUMzF{a+C`AFB');
define('LOGGED_IN_KEY',    'Ohj)),63 :5;7|/-yxhvzW_]50sXde+=vatlCyWE%r$=+Q,Fk|a.+K7H{(rh[8QH');
define('NONCE_KEY',        'U&K2zl$+5RQkr%vj2g8RmRIT5oz(}eDX+cghMs5(|FYm^&2WW,g#En.]1[EJ[hj>');
define('AUTH_SALT',        '>V/9zDwUP-o?|^ajg7,9;%h{/b86gPI9j6XY]o&s?>Jx=2/z&D3lKRx9&n@7[z`7');
define('SECURE_AUTH_SALT', 'gJp&U&6dzeD]b.+.Ggu9_H0;!wpBl9j<1cPky6pLMR|rl :|+7lih)n>~i+y{N;F');
define('LOGGED_IN_SALT',   'h|b4)Eha[m+]Jr,sAJ##!NK@$Egj:;|yS5vv|6kpv>SqAKmyfth=|;v=+}-)A]rI');
define('NONCE_SALT',       '>>Q4Lj>dJMyQZu|!a}7(GE/cFKS+kI%JR(nk}:b2mb=2*y N7G?n47GE/Qkod?_k');

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
