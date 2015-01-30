<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'goldisbest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ql9T={0lFeERvDb_ppy8![o71{<o@S4e[mAvO%BrGXl&z4]4|IwL<L|xv)tvmSU`');
define('SECURE_AUTH_KEY',  'O$2[-|>%DPsvrF$VP$<-7-hW=v06LQHU7]k}WF!}sNV%s&yq|m[d-me2UMcq9|^#');
define('LOGGED_IN_KEY',    'a HtCcRxoO0`]8PV;i+lr[:;z/T_wwik;W<-1aMuVvdmIr-/>aNH*&noZC@0ey~l');
define('NONCE_KEY',        '{+aX!(eQsY3J@bb*@hZ9@?ftB1.Sc9~Oi`:U!c1@!W9,f[7;~h`|}Mw*3/TftJ.g');
define('AUTH_SALT',        'zCrDu84X !|KW)&^4r[Yljy`{zjbCR||XJ5YD%Hs|foHCd`pLEjG`Ck`u{C:RYVB');
define('SECURE_AUTH_SALT', '<4NxH2!U@AF^!=[r1@(^2/hli22lcpDdV&8TtrtD DGnrDY$&l|w@QR>zE3+otq&');
define('LOGGED_IN_SALT',   'Cwq;_!TJjCb)gg=]Gu-qsI7~:LjV$2Euyn)S@bx`zfucQ]P]NN@B-s^UF$93$|9E');
define('NONCE_SALT',       'W9oQg35%f#Y!}]XPD*fS bBn#:t)[%BDNsG^N]+(lNmFs5JT{&n%Hf{&=_-:Wq4+');

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
