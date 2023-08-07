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


define('AUTH_KEY',         'Bt92IIWSTWJksudeQE5eueg7K1Thqz8Z11hXXFlX+BHQJhDBxHIALwhRd8BtwbZrHAD37WoI1jtfeN9GlUAoSw==');
define('SECURE_AUTH_KEY',  'P/AIZSG1DuAWLsRO4kWX8U3MF+S0st5xZ2/YUTfSVpAsIAQU6M3/d7i2Xu9QqtQeM1Qo9gw0AK101DMSa/8F8Q==');
define('LOGGED_IN_KEY',    'j5au6LW4C4PY1YK1qA5HLcHpJuq6hfmdv7pc6m1wreumZP//xtdiHs3IiIea2QYMwYYtRzY9F49O3fikHXszEA==');
define('NONCE_KEY',        'K9bN03DgfhshpriY5y6akvKNx9vyyKU58DXe23C7T2FL4vIYRqn9grUypQ2ouAmfjRCormAeO0VTVxyxmBTEYw==');
define('AUTH_SALT',        'CwrdmhO2+rnLbb4lIgiKCw/dl5LYK/mBE3+AYZ2PhE8saBBRog4pk92+4e9M3l5/SS4aSUBOj8+ZJFtvHrAf6g==');
define('SECURE_AUTH_SALT', 'btEHGMPckxiEFWXQKG8f1u+zNfpt8HD+w8PxadZHumLCa9CtlVubGH9ZqH6LPJ8GW9pNGtb8fXYMtGBL+mdveg==');
define('LOGGED_IN_SALT',   'Rie82uA7nbJpAMsjkNAtat5NcHIuNJifwG9nZ5NVFktV1aQMr+T/mJu+zVka6lbJkMpKZPDYWc43HDRy6WVUvA==');
define('NONCE_SALT',       '4R7zLABTj3oOuzTKmWT7h0YOcQBEF4a4oUb1x48pwNg6QI7YzU9x5RIIuW5bQnx2v7JM2mMdaBFkcWfmHlImlg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
