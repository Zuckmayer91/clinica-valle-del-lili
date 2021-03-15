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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sistema-clinico' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0HCo2vqgkwPXVHooinWRXCdbEHL2PRWYEZaKBsPl6Bdd5qLVsrfhx1GEZibufN4e' );
define( 'SECURE_AUTH_KEY',  'Qa2DKRULfllbfkw9n7jMByNtTCVZVtTsH40e6PPn1SuivHACbg0tCfxOwzhehsbA' );
define( 'LOGGED_IN_KEY',    'otHwtXacVSSqHStLcNUQv8qtiRc5K6ujFI80BvROTmbwR02IeQOi0GWcQGg2TvnN' );
define( 'NONCE_KEY',        'VwYAz9zaeKB94cFJ16EnXLi1SkG7EYNEqpo4njS1SV1s9kCwlKzQWnHzKdsjMXyt' );
define( 'AUTH_SALT',        'CZmPit4Faz7mmQNu6O2iBHRi8gR6KBK9tunyRGR3NchxyBqd5At33CxJiux4ODGP' );
define( 'SECURE_AUTH_SALT', 'KM8eYWtCvViolkqjrPhQQXV6Ska7flJf6pwg9kywOy1kKjFj1DyC0bnPSevmKPcr' );
define( 'LOGGED_IN_SALT',   'k31GC7xKE8mmS7zvzXQWhjOJ8raPy9IeTBJJl49OSgxGbt4cZqmjWcxf9rKvYRwu' );
define( 'NONCE_SALT',       '0C4cUds0XxaIGBJSLfB1KToSGry1qBUNIuseOXbSuffVWVe3sVQBYu1tf82gTSJW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
