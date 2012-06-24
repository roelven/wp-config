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

// ** DB Settings ** //
define('DB_NAME',         'DATABASE');
define('DB_USER',         'DB_USER');
define('DB_PASSWORD',     'DB_PASSWORD');
define('DB_HOST',         'localhost');
define('DB_CHARSET',      'utf8');
define('DB_COLLATE',      '');

// * Override domain settings to use whatever domain you run the site on *//
define('WP_HOME',         'http://' .$_SERVER['HTTP_HOST']. '');
define('WP_SITEURL',      'http://' .$_SERVER['HTTP_HOST']. '');

// * Custom WP settings *//
define('WP_POST_REVISIONS', false);
define('EMPTY_TRASH_DAYS',  10);
define('ENABLE_CACHE',      false);
define('WPLANG', 'en_US');
define('WP_DEBUG', false);

// * Table prefix, better set this to something custom upon install *//
$table_prefix  = 'wp_';

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K#.^5)e&7+O)G%{pAPPFJD=+MEgv|x$AeS64 $eI5i#4P/:ncq-T]);y1.GIc2/2');
define('SECURE_AUTH_KEY',  'dCUx~G<C+-=Q%UUumII2mFSOsM+?rZI<wFcV]90W~q;~ZhTJD+?U+q?4w!:?h@~{');
define('LOGGED_IN_KEY',    '7K`o>dD48OXY-+AE5&mD`rrHP)(=HYb1{X>|Z`Q|R@&~U6VhkQi!Y<#Gut- _bGN');
define('NONCE_KEY',        'd@/EAjjV-@OslHPlJtyQyd0hgDwx8N+eHnUX,2JgG|C<t?2;nl (6^)Zd:h>WtVG');
define('AUTH_SALT',        'FD`I_@.7hp)GH9ZFtCsVi-a(`!=b7h|O2UQ,(w<X3H*WX6KopKup?qn?A6QE37j>');
define('SECURE_AUTH_SALT', '*}.f~N?BU1cdE6R2-+w>N*V5&1jvu}_<DxC+iZivz{LEE@+j<nB1bx|k@M1Dqff ');
define('LOGGED_IN_SALT',   '%^[f|*UYu3OS)%;k.8=Q(OF.oEq7PGF`Qm$vi-fmX|>AFBc5xm/J#q!0$dJ{/:O&');
define('NONCE_SALT',       'l-p^`ld:,(+iB^m1|.j0bI)ceh-5`!2|9[VEL*z1<^aS<mA_rcOq=js?z++-^MK3');

/**#@-*/


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
