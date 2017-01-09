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
define('DB_NAME', 'wp_myblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'muresan1andrei');

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

define('AUTH_KEY',         '6t&YDq-{4.d]szfI8apBHBYa?,9zZolEx]`]71+_E{H@|(|K+8PtdB403{j3r1r@');
define('SECURE_AUTH_KEY',  '$+a0)vkW~vt{Zo{^6:{++pgUFm{x8*fx-7kN^!D5>}+*N*a8+,L wogf+c_x@P9(');
define('LOGGED_IN_KEY',    'ex8t0e@_`}k`>l{LeP;?:NK!y+<?-DF3ZU%-` M,;FdJT6l_|+Mko@NI^Fu>vG/1');
define('NONCE_KEY',        ']m&hzRr[CH[#RY$rV}V-zP-WuW{aQ9jcs(%(G=m2LsEuo)tQ-OW-bI}}LUrs1+k-');
define('AUTH_SALT',        '}jh#+!^-KpH_}v%]N6m1K3gu{=F+_Us>tP^CJe+[Td<IV1L<b,RR%5-?MPQI@)*|');
define('SECURE_AUTH_SALT', 'KV9`koJ+X*~6neZnibibAWivt=XHY,j1u{CQB!qb:tG+| A& >0^!gM9xn=ARfQ+');
define('LOGGED_IN_SALT',   'BfIlVz+sf!wrOz!.v-4c|Lib nh&T>=9Km&dww45!(x,BcL[wvXzL2bLb-Y+H2Uo');
define('NONCE_SALT',       'JL]KK&x,!,C/:<3?)De&-hj^$}xZW;F-F@OVVZfVl5/8@-x7]hU;Cp-)<nyb-=a0');

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

define('FS_METHOD', 'direct');
