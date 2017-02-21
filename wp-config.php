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
define('DB_NAME', 'technical');

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
define('AUTH_KEY',         '1!NU( 98^#Jg*?3{)V5t&[$[=}v<p^Bq/{Jlys.R|(,~/n](a|jf,U7aQz=8xjb|');
define('SECURE_AUTH_KEY',  'H!A.)+%R|$-pR+fQcD_ABS}Ok &95*r-zf;X_#39^q|mAM^Y@>Ir@?;5X(L06?X]');
define('LOGGED_IN_KEY',    '^Gc1~,tl`Mn]Q`0&4j[m&D]))!L^>fL<g 2g3tB@piyjaa2S#F2?j=2e7w>WHr,V');
define('NONCE_KEY',        'ITg`pZxE*;qtT|UjLPclO>j(D/A mBB,{:&#i<s2Z_~w.lX)NppFvW;cT_!!>LV2');
define('AUTH_SALT',        'pvZ]9<7Fb?5WL@x1WoR%lB&owi&nv,X=Ll@z=BQgD%SEwG 9>/)S)nRu|)1g51)h');
define('SECURE_AUTH_SALT', ';s*r_A,;OB8e=L5@u{Ym<nZh{U76CY#JE`a%b[Q@I9/^$cD%>qjb}nxOJ-JqV5l6');
define('LOGGED_IN_SALT',   'il5D2L*<@Jh1fUt-h=BG|kqY^YG+g?ZxnX}fQ%V]qTV(L-6EpP+M/4}B0KG*&Pp(');
define('NONCE_SALT',       ')ACKedzZ_ZNiB YX1Fe7lq:JY>;fMO^#oK)DC3m>xGTU1Zc)UlSs4*~dUs*}UJ!~');
define('WP_ALLOW_REPAIR' , true);
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'addix_';

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
