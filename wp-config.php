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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/justcod1/public_html/trendingagile.com/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'justcod1_tred');

/** MySQL database username */
define('DB_USER', 'justcod1_tred');

/** MySQL database password */
define('DB_PASSWORD', 'YsA9aO-%^P=T');

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
define('AUTH_KEY', 'DVhZSBtUsqO7TzS5w5B6N5+/YHLaN/30ea4GKCyittEZY5PdgZY3uf+XVZhW++ju');
define('SECURE_AUTH_KEY', 'sg6ruGljMj+UqKDTEIYN7gLbsJNPPzHZ+unjeyXRO0dnmEEnCQap/NFCKZHkM9aH');
define('LOGGED_IN_KEY', 'o1KtP0KgxMEL8/YOgUUj8tFEBpbt1UGviKvPz2z6rCE3ZmaGgKpSz7AOTMIX0/GE');
define('NONCE_KEY', '1MY7SBgQVTh/BpVM1UVIokjpfZKwEfhln7feRSc5jpqCyZq4Y3MMGHqpV5s7Op1v');
define('AUTH_SALT', 'jGeUfxDsB4tvsYyWoZGHAVmr1v1WLx+vpfODqk025WwANXop0Nj2NxhlOcKgS89c');
define('SECURE_AUTH_SALT', 'iXRlA2P9x9tX+i51pWzzI/Pc146hw++FQi7836wL6WvbQNAJ/Ai4jPkM0whS9jBc');
define('LOGGED_IN_SALT', 'z7ixwPswRW+k8yq1T1Axi7PfVCnnlcs8lmJot7byqedHm+1UA9zMmNc4Tt7YlKy7');
define('NONCE_SALT', 'WZtmH1aXp3Zp66jxICfRLUx0Ef66TGnqlR9C+nV4S+CDuCmvg7h4et8p/KD5kQvI');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'ta_';

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
define( 'WP_DEBUG', false );
define('FORCE_SSL_ADMIN', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
