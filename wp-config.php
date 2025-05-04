<?php
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'equateur_gn' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'qwP2AH@O17^xTrW%*z-=!S@}>0@TEW-gWBI[?<>|K6;hlFvqI!.7sTn7=:]Q@469' );
define( 'SECURE_AUTH_KEY',  'tP%fakeE@j@41_xAW?p8Z:c.<:Z5?3L};A_)dxo;j|X?*J7~p^(@w1S.IF#1MX3b' );
define( 'LOGGED_IN_KEY',    '~]8ASPxZagRyv .?ZN;(X/LQl&]R iDefmU;n4Id%61QpBOy-oKYS{xR8K-:^H<!' );
define( 'NONCE_KEY',        'HFyD-o18vn6L]wlcM!:raHH)ecfin-OApFB]2U^gy3mz_+w=+l^>QhtV:jj<%NTd' );
define( 'AUTH_SALT',        'K.+>E.^~(;$HqPw~%*IWQmNaMY:t91R> bT&x]T(u2+)wd0,&`3e>#e0cf0OoZQ>' );
define( 'SECURE_AUTH_SALT', '?OBhVg{2NpSH]?8xP&[@mB?l9-L#~9L 0rP:-]h;1KXQ n4[/EC[Zh=a~;+JfXjz' );
define( 'LOGGED_IN_SALT',   'IvtrNhlYur$w E^=kD]`GP,hN&<AZl7}OY*<;n=?$YF`aeXf`*N[(`%p(}ewn`?o' );
define( 'NONCE_SALT',       'rE~0f@h_PW>J?(kc8zT+ms$}Jgdu,z@2&JbkQgYTaGU3,JBvobDPGekTDw9M5Z*P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
