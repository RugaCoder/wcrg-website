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
define('DB_NAME', 'wcrg_db');

/** MySQL database username */
define('DB_USER', 'wcrguser');

/** MySQL database password */
define('DB_PASSWORD', '!Wcrgpass25');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_unicode_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
/*define('LOGGED_IN_KEY',    '.,P:`1QdL7vF|6@fNQ(2ashVStl+nm5}k9gt:|}r5li.b2M1$cPRQ2,k7N)5ZW2J');
define('NONCE_KEY',        'R8>8-+K61MV:P*k06x;k.=DOkDv#Bg,N<pLbLL(^[o+zfj~&4n2`-#9k4uU0=LhZ');
define('AUTH_SALT',        '{W@<K*WmB4:Rz-s!O;hHm vz{Qa7`xAMh|p8[:p.>BA22npOJ<Jzf3X<)-J/!-L5');
define('SECURE_AUTH_SALT', '#<geK^5B^0=L-jQfKBOjNaGvCG8a^-dF:Qh8|px0uyREIHXq|;>od93Pu5ShR]S3');
define('LOGGED_IN_SALT',   ',C;H>nY~oeH?uyXGS{&qluYJ:d2P~RSBJYBd<&vS>tfr3;=8jRdo%:fbb+Fa#H*Z');
define('NONCE_SALT',       'TX0aq^^q(5?vq_Lv`(;*D wNK~6:Od1%BjNUihU9/kY &D@b3?i|y.7(#oLR 7-c');
*/
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wcrg_';

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
define('FSMETHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
