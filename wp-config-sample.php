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
define('DB_NAME', 'startwordpress');
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
define('AUTH_KEY',         'Cs79wD2|+GeqorraiEYaR2.1IWxyCV/CQrSN9D/o-YhLpi^#Nk0fLJR^{8[<A?m;');
define('SECURE_AUTH_KEY',  'c+3w(?b+zCG7+KN`/ 9>D7|}DdA4IUS`-F/m dsFubh_&%4o(|M)xX5%bmgmgo[s');
define('LOGGED_IN_KEY',    'NTTp?SGkk#&y(-rY4P7t1FT!04T;%{xEhp!T>6[C,LR6kUSHi177WfHxQ|>jEM*`');
define('NONCE_KEY',        '09MA~-amlw+1iDUf^:m[IOW&D`;bni+:E5-/)+ -x#h.=/wy6Qkl($<c-~K-s.y6');
define('AUTH_SALT',        '(F#]QVE=-YZ[v9#m$ql(Yqx9ai{r6|wk:{f5@vo5e?m^RR^8+G;[E)MM:^U_;Z`E');
define('SECURE_AUTH_SALT', 'CzE^yZ,y,*y[Hw^J^Q!fAA+F`Yx/-A*En~Iet/.m$y09(U~TOaFRxcgTCs&C*(pn');
define('LOGGED_IN_SALT',   'h@Y+`r0-xR:@5HNy^(NPh-(SA-=TvK3.,fi#we-b%DFR|xsa<S7!w{[ntl%:1m<A');
define('NONCE_SALT',       '_{#EF/]P[e2*P(+xC$9 l9=L#r*Nm.z`2Y.qgv5w7sZ2/Er.M$OD2|Y|<ko-XlZr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jhs458';

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
