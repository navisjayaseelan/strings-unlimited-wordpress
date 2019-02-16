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
define('DB_NAME', 'i5318474_wp1');

/** MySQL database username */
define('DB_USER', 'i5318474_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'J.q91rkyVn2muGNPHbL64');

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
define('AUTH_KEY',         '8kAdoikNFWTeWhhGZttoZqL2JI1jAxeC1ccEX4mkGAZmWaAUy8FsDNY1nsgEcQTi');
define('SECURE_AUTH_KEY',  'sJlHto1KiDrgYqiXmpySx9pW1zXAIxYy4dusbZrKnLH819LOIgUnIMHleX05LkFe');
define('LOGGED_IN_KEY',    'lPdeh65PngR9lYZciTz5VmARiiIr3FDPjFpPrieBoGBXZszkVrSNbE4eiQNES1J8');
define('NONCE_KEY',        'Ti5uHulcwzamKW04JB9tGSLpDjGmhtsuJy1TQD397DZI6g2Angd4Cg1ojb7eHgL9');
define('AUTH_SALT',        'FdAHUA64gOtYPy8bGCBahmhNJ01ra4GsOnKiGOUKWLJclBviolONEgSrhjPZwasi');
define('SECURE_AUTH_SALT', '8WSDFKZkbvDZn8TyrwV8wlOz1wlpiDyciTX7JXLA4RTdTApyjP6mmiDJaf2t8zkj');
define('LOGGED_IN_SALT',   'jlIqFD899MSrYky8EMhdsj9d11Sbnub78NhcJFwC1pNr6KRWssuB28Ts5jcgWgTs');
define('NONCE_SALT',       'KZ9bTUD8XKRVF0Qrbx25X0Fb4ODHNEyjqlhRaNiRNvUb7ngESEpNvlnBcmA9C3KX');
define ('WPCF7_AUTOP', false );

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
