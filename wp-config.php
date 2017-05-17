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
define('DB_NAME', 'levison');

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
define('AUTH_KEY',         'M+J8alx?7217yk||K]{jE3}hMFB>CnIGM7a7$(kcgDR,bT=g>g^$EXbaWwPq1`l}');
define('SECURE_AUTH_KEY',  'sH=|xC,6V29]80[U)U{Xv( kSSLLg5c+l^kHh(U{&Q[r#v/_tZ;v4}|TL>g,/DPk');
define('LOGGED_IN_KEY',    'tCQacIN!nP@h)xak=jz*?[8rMpVa$;FrTdq6SA4HVfHL2V@.<{k=Cc c?|^!KMs-');
define('NONCE_KEY',        'W@XJlx`y)kQ}EZ>ySb5QAe /A9ZFW(TWI;afnCak*>lCln8vI[KM[vHL`n.dpFi[');
define('AUTH_SALT',        'd<>yFw6u{1.phZdRh[bK|miw3C9ICL=1]?No6 M;1-K cp%={9|VRE;PEq{W]$$-');
define('SECURE_AUTH_SALT', 'uM!6rR/*:8[=H)oVT]BcjAabt,5&-[t1 8EUrolf?fr4a|:pqoD{gD!t>Mk !]8>');
define('LOGGED_IN_SALT',   '-]b$}om>==xIbaJS#3`%w:W}0]]4[7lNkp0}C98`(.Z*_`yU$#BqeY=2Qt=3YXW5');
define('NONCE_SALT',       '0m?YdGcL*c9z):]}Y$%b$O#_T.,%s[_]?qp+e08n};|^<!LepHs;;E=Ky]*PTM_U');

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
