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
define('DB_NAME', 'wp_idealseed');

/** MySQL database username */
define('DB_USER', 'idealseed');

/** MySQL database password */
define('DB_PASSWORD', 'idealseed');

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
define('AUTH_KEY',         '-1dV=6+KFPb.h,C^x!Gu#DOu=-8!WxO45COH(;*,i]!1B8@w|-_en+ qi[b=>yx!');
define('SECURE_AUTH_KEY',  '+|5d?wK&6swcBa;p,&Y{x-3sv~-lO~mrp#~Uq4MoXh31Oo}+I,9gYfpb|,g8D{^t');
define('LOGGED_IN_KEY',    'Dm;z(1Avr>hm:<,$L.Yjo|c2CKn~3*}kPcpHH+ibumf0-t/<+*]<F>7FTPL+xkIc');
define('NONCE_KEY',        'DltIj|w6D>&W.JDL 9}kt2wGk~P+z=H,r+33^VH60,6MlHe8RVqW-kzH&;5;1rX+');
define('AUTH_SALT',        '9jootu$]yz^|yW3p]:puHU)^UiEI{)UEmJFZ[L<=Ph;e6}j(Qb67!?E]PqUF|TYL');
define('SECURE_AUTH_SALT', '6[vnU~Dg$bw$zFCTN}9Sm:a@d9@&)z3lKmWtP!|0xb}4-9As]bIR@(Jm^{JIiJ s');
define('LOGGED_IN_SALT',   'kCb[9m@c4D[.7t[X/[s?K<}3D$/`dJGXu&1}(]Y$Y8Piy|X*yg:dw*>1v&H*-S6H');
define('NONCE_SALT',       'A9taJ!+j)]*{niMAZR<a.l|Zf;]pD8Ty{wqiHBxcyD5]O:~e(v9gfA6|.R2Cr[3K');

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
