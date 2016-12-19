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
define('AUTH_KEY',         '|,+owu@9<3(>:Q*_33t,Q6KUamq9HrJkc;}cvM?@/5=FrqR1sf%.sE2z7/vV+/Fs');
define('SECURE_AUTH_KEY',  '@c?~t^|FbWL8X^9k_l77mIKT43u|DjIYm$X%-7eoosokcKm%C-Nw~0WK9*/{[cql');
define('LOGGED_IN_KEY',    'S.@auvm#,PR@4J1HdW5LJLh Qi?-/?~g<>,Lp0*W+vSRYpHt-P4RlavA6Ic-3yG}');
define('NONCE_KEY',        '^uZvK-EG 4V8uzEC?j?#*@LDO9uY&B3/pj.$Zfc]ey$<P$t!Sg)^yn&fUZ^j~DR)');
define('AUTH_SALT',        '|pI]yR}gJMD~+.=[)_K(^B81{l0gbCAD]t]nt6>G;PjtnEw!-&71D!-F)I2~<{7 ');
define('SECURE_AUTH_SALT', '1fVk1J>^N>8KQC1vurdU5)ox{%t(n0[X }/-gc-!h>mRGLDNb]zrqA#]sbLV8_|c');
define('LOGGED_IN_SALT',   '7lI92H_O8:A+H`+_$?fw+Mw?WJ={#s.G?-Q~r t%]9fenC,{m%C[wL:#Yjt*`>aO');
define('NONCE_SALT',       '{Et:d98Zx3JnFM#Rg{hR1.yw[u(|i68:}.vm+P[LP`R%}m,(i_(zl)vy]8kw;zhB');

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
