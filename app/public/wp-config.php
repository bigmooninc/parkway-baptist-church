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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G3I/LFwpO5HSvm5E+heFoaeOXobC4QBOj9kAM6ufXPIB1/eoU+o8s5LBZ7fPUasONQkke8T1X9bDTZOF+TAN7A==');
define('SECURE_AUTH_KEY',  'HrIJB5IKWf2C6x/36OEF1dcAgerNCoxAdyQGF1bp2pEtWIGEzK0adE9UyYr7iGeDHQTfpume6urMKu0l0BBOYQ==');
define('LOGGED_IN_KEY',    '6lYUT0n77E9LDtP9sYb+eO2SOw7jeUvo/vpZV2K55NoWEXQnvEx93zAuEjLjS8vFHlG8UvazlxzazPL181OLWw==');
define('NONCE_KEY',        'qjbFkoIkQg9RgbmLdKNAmBMlXib8/ZUcKLFikw9EB9IeWMDu73R/Ser+Zjoz2UzPEZHm1quTZOvn63F2bJBpqQ==');
define('AUTH_SALT',        'opZKBNfhiLgLyHlA4JtfTN7wvQoYa4sE86elwmqx3J/aR4qOCtrr7Kp8XFIaJWGk/gzhaDv9/XmU+/HbPwp9TQ==');
define('SECURE_AUTH_SALT', '5ruJuWnmKjwhIDaIH0fNZhvZMZh0UfnDFacVdJdOmBfrOrWTS0AAqv9qtJertL9R3gsvM1jbemawNyrLbVQEUQ==');
define('LOGGED_IN_SALT',   'P460+6ZZ+USw2jyfPmTt8xdOc/oJ/Uzyhz9btHjdONvgAUX/Le5oASTRKxSFcCAt2Kq5ZoeNFw0I4IY5azfE9g==');
define('NONCE_SALT',       'Xm8HAWXMPgX3Fqwen2hG1GkjqbLrx02kuRhTe/OrdF/jSv9zHAtu9cWvxjVc8mvMRQVDqqMIGWd+1EmEeCZrlA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ydymemwuzq_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
