<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'divdevel_wp134' );

/** Database username */
define( 'DB_USER', 'divdevel_wp134' );

/** Database password */
define( 'DB_PASSWORD', 'YEp3!3S[M1' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'acfaglqm5ow9a902k0g8lgsdga1kgekurtuvsl8uja5zlu4wcdgsr8s9eh7b39yt' );
define( 'SECURE_AUTH_KEY',  'gykcqmktpdzwaciz1xgrdi2mtl3wawavvu47oxw7ts1foik1mrjkyvw9ucytb46y' );
define( 'LOGGED_IN_KEY',    'yw8wd8oggjtjsyacv4vwkb8davvmhtk2hyllqfzqitwvpgfuqj8u2mufpl09istk' );
define( 'NONCE_KEY',        'vrjfxrjuwgue1qbkc3tfr82gxmnu2kyrhom7o8qjewadf28hf87mmakz6j8qigr2' );
define( 'AUTH_SALT',        '1w1vxgxzsd85au1buhwq724hswa8puk9vlwn9sjg3v4yjxxysbc2xzgtzirbzanj' );
define( 'SECURE_AUTH_SALT', '9awxgm2ohwiutg9tbusqv4ctpsmselal0mrdbapm8ihbnqztyoc3b08y44wajnvx' );
define( 'LOGGED_IN_SALT',   'udpjaoost1ospxlv8xf9rengcu8djyxvej8s5jzfnuhcy4i7sdsilfx9cuetyp9d' );
define( 'NONCE_SALT',       'giurhcs8h6j5jozgbxdniqtkuggi6drzlsdre9wxy0ymxhtq9qwvfghlffrml8oi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfl_';

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
