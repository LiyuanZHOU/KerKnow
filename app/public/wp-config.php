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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'A+2EvRiWtTIrQXPUzMiqrV9h6E2lEdwp4KaKx7QMazrEgkU7aO/8vsVl+LjXsn6Vu0WZ647/U3t06PAw3KKuCw==');
define('SECURE_AUTH_KEY',  'p7+c06XkJRfWGjiQ4mmSJwKqwm6Yw1KzByzmrAGECgzdAAjpVOper18subt6G6TBNSuGuv+b4SDHKm3sLM5NsQ==');
define('LOGGED_IN_KEY',    'CAGaMJgG8tdxA5ZY1SqbC8y/VKemhJ2w+wmcL/ao/S4RIK+OzAXZ0aoW86QI0mlvyHvPZa4R5uwFsTNbOZrpzg==');
define('NONCE_KEY',        'tLrhU1V2EXAdOzPZr0ihrQs/LQ77xnj2/rI8QsPqLsmyS8XjoVloKz7nhr7slbtF+oqwl8BJA9kh9h9MREFH5A==');
define('AUTH_SALT',        'G/4huIsPwwcqHPWLECsfXcyS4RD4BvwzVgYJjn480Rd2gPQ/kobRAkgkosAePdhaPIIfkCjSB/hpeW8Vo9S82A==');
define('SECURE_AUTH_SALT', 'S5XiC2CloXMxK32FdH4r0zgkgnUve0fN7zhS/CYU5SGN1hRYvHqFplTBOOjE2JLv/x6zutUhnX1d3Lbqb4G+OQ==');
define('LOGGED_IN_SALT',   'eiPTyIlGK0wZ9jZrn7QAO9mU4kUvCje+FhWj43RqooIdLQoDr4cT8XdWNfFdOnjJIazUQJxNWRqOoKf8BnuDfQ==');
define('NONCE_SALT',       'LxzJq1Jw4PxX8mAcyPqvBalFAJZRHy0vrzsMyrYx/ODS5eu+MSl8VUzEwcHtHeTVB7v9jrRd0Da7tIRbBk5CEQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
