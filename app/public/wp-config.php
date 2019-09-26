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
define('AUTH_KEY',         'peBdNrD9ZJ+RkgcTvCCoAQS3KTKwKpe+vK1zSa084QUgGAmy9TnL6HvP8M5QKwwX6phKNgL8YGIfC8FfAymoMg==');
define('SECURE_AUTH_KEY',  'ncXQLpk1wuZXSDpGPBARyWE5zI+HtsZ1OpPQA+TIChw4EJscEFaOeswTcM6+0ZH3u2SKPSMei4/rW+n6NJenhw==');
define('LOGGED_IN_KEY',    'v2XLU3Ba+AKX8Cm6FCn76VmLajIdtmOhUazEShTK4qW2ILN4kKETjYL7f9EZ22PwzlTGjORyc81NobfeyOOoNg==');
define('NONCE_KEY',        'bua2FyTK9A1PAzXyekLbBbzVnbXjJrBIwxZlqvfb5E8mk6JBq7+u/MxFIUoMlOe/nvB+lNy9oE5l9xc+2C99YA==');
define('AUTH_SALT',        'wVVjaMQcG9zKcuM4JGCJHe0MsmciE0hsrziR2Ga3f4u9Y6TK9MukEE4095Lnr6Xwv7uzQXAs+mHGBbwY1RNdxw==');
define('SECURE_AUTH_SALT', '2/XLLMz0BTa1TEXG7NQaoV3CTxLMCYUnckvijC8wk0VYEGDwRSTYCxSCtVnJzMie4Mizgrn0vMRWQqv284/w1w==');
define('LOGGED_IN_SALT',   'SvIBN4VjdtS9R5Hn3gr3+q/OSWDMm/aTtfJqaF66AudOtMKDy37wE6SVkGZ1WhxgyEkgD9qe4nNTQKmVzUHJ0Q==');
define('NONCE_SALT',       'skgBToviIjwSe47FwPKqAdz1+zYSDsDej3PoA8VXPk9bTtNz7+E6igGPjh3rEkhHT+OCHACl5ft6XHbWAMhGcw==');

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
