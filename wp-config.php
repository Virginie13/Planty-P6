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


define('AUTH_KEY',         'vWq6OmvwfmKtCHkcUJ4Xpgpqzg6da6yS2nXtERq6ANLNoz9v6zuqKXXNk3T6JpnS7CDPtlTwxRBRvZMC+0MnnQ==');
define('SECURE_AUTH_KEY',  'NmUs3DjzIHhEBvXDTfoqOdmonze0n5/b7lXQOnsYuAtr+LbAs0XWym5hIUyMDLo3fx0nPAdW/9GhGDsNxr5plw==');
define('LOGGED_IN_KEY',    'ZtWOzZNpoTo8/77qp/mtPWn+MqD+ia9ytNk2ppSaPtaDdw/v8BntRCtU4GZSbzX9wZ9r0ugCm1zWitMlwQlyCw==');
define('NONCE_KEY',        'sEstHwwWBHAlDPXJyv6/78TX3HvpLC32D67xVTAesa+orYxKGtHo0OFpRBzU7fFo+yVtekIgRhI7VwsandT8XQ==');
define('AUTH_SALT',        'nWvRMZybc+sB1Ji+3ITKQ6Not+BG85xfCixAm1icaxbStuOiiW23PTOywXD3UDzK2u+q/4/mz5XkzLyeHzFdcw==');
define('SECURE_AUTH_SALT', '3hUkKQW79dAWYkj7pEf2Ft5y9MuXlKkahwD3KQHFy11wHeN6ofHp1X9ibxLGvCc8B2fuUeT/bYqpcJFylH3wIA==');
define('LOGGED_IN_SALT',   'OhOToUEc6/r9TqBzp475raVT1b+HNZl2leqaAr2fjarwN92UHWoSFTz/NkJ70+vlHj+F4CHuPFVFMjLx0ufd9g==');
define('NONCE_SALT',       'ElbgDKk+ASgMu9KgQAPkwbB8aUmUlpkFZW7bBWvUPM1Hbznyl2Tl6RQ70XD3fVZAMZlJhLGn2oF6tUtZwtUg/w==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
