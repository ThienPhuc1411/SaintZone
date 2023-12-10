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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tzoneonl_wp617' );

/** Database username */
define( 'DB_USER', 'tzoneonl_wp617' );

/** Database password */
define( 'DB_PASSWORD', '6pW-95@5Su' );

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
define( 'AUTH_KEY',         'lrtvzjbxzqi1pjpoxfm5v5swmxom3fgzlc7flyef4wohpjzgfhs4agzm7k7i2lqo' );
define( 'SECURE_AUTH_KEY',  'necbuj65ozd4jyuzycjgypwozolwfvelld9szhzcinjrzjqm5zxiottr1hphp3ci' );
define( 'LOGGED_IN_KEY',    'baj8st40dnv2nknctnx3tfoshbsdqjtd1mnmnamotnyyftkggubgxf0gflccbpyo' );
define( 'NONCE_KEY',        'g5jwajf9tyi1pvl0mcfjablwawmmmrqzwxmf1thdprlzrhoilxuj6plggcqt68wd' );
define( 'AUTH_SALT',        'xgunxntc9748hff2hfx6iru7wtydfpddfit7uqhohbwqgvugnhasuawsrfwumhun' );
define( 'SECURE_AUTH_SALT', 'cjhhee5u3ghmg2top9af7f401w5rsvodfwxh8smnykqcixuq9lcj44udgekrik5z' );
define( 'LOGGED_IN_SALT',   'ievouwvbuuiqort2hpvk0khzpo1glt190gx3gaqllf6l4bndigtrhrp1grxkusda' );
define( 'NONCE_SALT',       'tutwkj7wkcpjrhfri7drckknf5lwlhfe610dijikrtvwzftiktkoka32vjy34xii' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppo_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
