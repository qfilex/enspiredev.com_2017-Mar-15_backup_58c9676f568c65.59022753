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
define('DB_NAME', 'enspire2_en1');

/** MySQL database username */
define('DB_USER', 'enspire2_en1');

/** MySQL database password */
define('DB_PASSWORD', 'Enspire!DEV1');

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
define('AUTH_KEY',         'ENt/z T;>}3TIw6A:5fXT;w?E^`w(l/^->]F;dIrCMUTAI)@ZGnS#](,6h2Hle}:');
define('SECURE_AUTH_KEY',  ',zV^!<(zezQS*>^gs#ys~:)$Q-YRZ.0ozv0/)9ny%$UdGiXTZYexfWX%P>p<gFrX');
define('LOGGED_IN_KEY',    'iC_y+_q<JLM&wRo0n_<BD_m0(OE<,%o78,?%}0Nm`qO-tlbfq74,J/qv:4gP@|kQ');
define('NONCE_KEY',        'X6~ZjTFSBp03?Px5tw9goU+hoP{6kK)@Ci1=^Rg!qt)(~Gc Sjx _Djo{M59]S?Z');
define('AUTH_SALT',        'gl26uNtp~|6V&s(%JaM10$TcHh7+9A}`0i#&`MrK7X+QEL9+P>zqPz$rnR^YM.{B');
define('SECURE_AUTH_SALT', 'do5.^~BH;=CF6_b4zG&2r&j< &U/}/j1HC3Pi2-9;z6,LB|<p1X<Jf} 6ES3K?A~');
define('LOGGED_IN_SALT',   'u*lLvB<<t*a YC0]@JNud$Pu&BNqPnnXo@odzwX|XctLC!E7W{E)~h?WqQL&IBHn');
define('NONCE_SALT',       '@X=9Gco3`B)OTl<oww<nkn^t^v[tPOE^S?f)m!^-#K|Oh4e[,~9*>-r6lHwZ_SpP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'en_';

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

define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
