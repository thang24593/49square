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
define('DB_NAME', '49square_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z!AF[|&C-N[IHDGwQ9_+=iCV(-0Q==@ZVc>2QTL[VZdjuqt/$_-E!cY!?g~{X0`:');
define('SECURE_AUTH_KEY',  '_w&>6|~f1TA+~vt9nd4GtS(<=PAt9d7ztI7U]i4nM4@n{88%g{fB#1GQEb$?*f??');
define('LOGGED_IN_KEY',    'TE[2l:RZ4~ed:,oZ&I@m;GR3X757;V]%8_B1jkuP,VsVa(1N5n@J}<@iBy}x601N');
define('NONCE_KEY',        'h-I6[ny2%<g#H<Ntu5pN(l7O[q@`zbC6*2liEhIsmbJ8?6L8I5a<hZ>h;Fh2F?z!');
define('AUTH_SALT',        'BEZj|e$xM SE#~H|zylc?-JtlT^z=`{`C*gGUv<R6?Mi4A(hbDrQ^)<ULSL6s/XY');
define('SECURE_AUTH_SALT', 'WPk)dqMD38Iwu)A@LM`9I&cJ+/gE2phK.)wao]vKvb:OVwS,Y`X)ay&DFq1dB9Vi');
define('LOGGED_IN_SALT',   ' |?Rkk-mj_boc1],!EYys*U8u:`gDI|W! 8Xx:mTU[y_iIW-lQ5qv}DQHC]CjL&!');
define('NONCE_SALT',       'y`1?RftKR_W~*DatBe7PyoM)jmR-s%;BGZF1ab0G(5bA8E4oV7gFh_.B GP;:v@C');

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
