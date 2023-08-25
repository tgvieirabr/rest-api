<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'YPnzPnbx/JyCZsR1r9/Ss7CAdcgXfmKI5M19MNoM4wTTyW0eWvq59EJC5wvOPenTLengLZ5TlZZpaIpF4fNhXg==');
define('SECURE_AUTH_KEY',  'APoTiqjhHDRWZXJzvddYLNZlaDUshfEsXMgu9H+iiz5nASq0fuM2Nt7p6zjDRPb9TOgzez+jvbshvA8QI9VE0Q==');
define('LOGGED_IN_KEY',    'FNVC2MhLOt1Bi+UstMKOFGjFhLI0a6Z2bdQ9SrP9CW/wevwYMTYsxcX8PhEpp96UUDX/WKMFQwT/6Ao8d1PpyA==');
define('NONCE_KEY',        'fRACmEVG51VkEZWvJiEFjADVWRwiMzuWHVFhduZJx+NQ8TFibtgHGPDa0MAhaaIPxoL6ENv2n64lH3NLen8Pyw==');
define('AUTH_SALT',        'RBfO9GgW6U/SPrqyY2qZOGy4MFIK7CFbjWTBawBpFDvReTHrKiGYn7RkqipTbfMBAeh6EA2YwI6vF3aOH6r/aA==');
define('SECURE_AUTH_SALT', 'ySAM+kp/n0salQnwaoD1IWKLpYM3iS+hwBFQ7XXUrRqlwFU6IAmV2F1XDeAKWsMkpi3hZiPV8otUWZbH3e2SbA==');
define('LOGGED_IN_SALT',   'Uf01xxyq6nybrY6H4AfixZfO1R720A75/KG6hUIkDUJUrtkA4/+evG2aEt++6HoDkMbqbarPH+XvsVmRg/TT5Q==');
define('NONCE_SALT',       'KFRda4q1Ohm9NVsLTXOKMYEnEdcPI9tBgii8AA4ADSYyt3BsFn8yMNDkYruYNBg8xCu1Q9JsRpAYJUOsPXdMqQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
