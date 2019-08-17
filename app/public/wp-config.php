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
define('AUTH_KEY',         'A9gfejBb8Oifq7c4OvmT0xruaAIc7XsD9MroUoYQLFIXRy6gPz6P8ePhvPwIkrA61SydO7Ib57pKu+e80OcJLQ==');
define('SECURE_AUTH_KEY',  '0KLh0Dqh09Tbdg9Myri0lPmvRwTWkelKUprw+fIlZ4uJNT1LyrLZEXNcC2eKi3k0guzlUGC1NkIsR2PFj4LsEQ==');
define('LOGGED_IN_KEY',    'XPUAtOVgWsKIpUM9Z44uuU0XOld5tAIx9UT3RjVY9Pq1aKaFX1sQD+D8FBSmaKRWtc5Vh0R/MlpwqDyiNaQmXQ==');
define('NONCE_KEY',        'CZ0RUJijrZA3gHeReitLt/5furP0B0+624U0HhbkjmknP3Jzi7cOasfYRzLrExZXthGri0pDxmuIAyd6l0lBPw==');
define('AUTH_SALT',        'yY4lzGgodIljzhTLcQbnjEWfDVp72NV6APMhD+Z5D+sQo0WjHkLVl6XzX2hOkC9GJnKz6nP1El1Ppu6KSOi/Rg==');
define('SECURE_AUTH_SALT', 'Y59i4m0WvO6rjXIWHANC1vRD0YhYCAZriFLqjFfgYIj7YTsn3myxXUq/ONYc7xKauN9nm+Y+Mjd2Bh9kWgGO3A==');
define('LOGGED_IN_SALT',   '60pS8ct4CcjyD52+K9oA6rUkWNzgRHpJOqd4XDRpSTr2RxpwdZIQ7cYA69633wv/qJI4nvGY0JY1Lzv38Vz8/A==');
define('NONCE_SALT',       '67Pt/G7necJgs4sNWjdfo6ar8En1X2pNQqh5ohJJUfju1PinkjcFksaSx158WOrDJ5pjWKxY5cfGHUpZDmJ7Tw==');

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
