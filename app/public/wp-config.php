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
define('AUTH_KEY',         'gLQFcqkndlr2gizJ9zuZaiZFvkNzYNp4ylscssB6/qHwa1MrNsHnRWphXDLkO1Xa86XdQxwfloFRWrx4vXUvaw==');
define('SECURE_AUTH_KEY',  'ccYY/hNY4X5uOmfSkp9S4PbzB3yv76RjyclU2mQGmTXdK/9jHscVkY1ym1su6lRubBPPBrgO98A9qF8geN1AiQ==');
define('LOGGED_IN_KEY',    '006dFHDg6st5eSuxnq+DvxvFEwlbk5Tid2iWOz14LHCzTn+0abD8QLZFcZ40pXa6Tw7mzkPQEqySgPzYG4xwfQ==');
define('NONCE_KEY',        'A+htdFa4i3Zay85Z4da0U7L5nCbeqlZ7WAQYk5HusLvtq6KJimY+q/evCe8ZUmKX66bE93JUKyZSfOw1L9Ptcw==');
define('AUTH_SALT',        'm4T0pVZctNR9TLynJMB9AWJs8zcFh6FKChjFoGWZiOHeBacDOKlUv+sRMb7ZDoIGRQIY2AXbXpLZlxybQWESiA==');
define('SECURE_AUTH_SALT', 'IxsFP5j/lKy2P+TQLWiYx8fsT/g2+04lj4oHxR7pjO+A1UES7e6lRilZ/XNdFCQ0YIDSLAz6z+VpRwJNe1Ve6w==');
define('LOGGED_IN_SALT',   '4bYs9tXElkFcYvcF8W5r8fR5EcuPIqnDTNW5RgflV6Ob5pVTU82n8I2ZR4iNwNStszGPgLi+fOorkZrjWHbHiw==');
define('NONCE_SALT',       'DbVUFANzhB/HdRjxG7x/wAXmH7dKeCKX9RYt1fNOyQD4+Iq9guRFBhC7GpXBpHVwXhd5+VUlxGOkg2Liov+ThQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





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

define('WP_CACHE', false);
