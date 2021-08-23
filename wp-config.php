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
define('AUTH_KEY',         'agPlukQLxxA7O7Ts2k8BgacSCjAM5mgDIkWxu37RaxZRK/B5GuSPuYZNCExU8fl5qd57M3BaDib2JORVw7fYGw==');
define('SECURE_AUTH_KEY',  '+4a0biFMQGrwK5cRIAlSE3TxdOxIc6+3Y+iuglo8UmA5ev5EWT9HhOMFwQhW7MHHF5hjt+tIzNvfAyeoRNR/nA==');
define('LOGGED_IN_KEY',    'lBn48cWPoNgBu942snXycZkWyefDLrKu7A0id1lA3oe+3h61bB8oDzYB3g+LoF+tcrSCmpOejxBGgxNDwmCBVw==');
define('NONCE_KEY',        'w/DOWhDveNLakBJQHQAoFKQR6N35E1yrG/ZCba4/mBSeBZdhYsaIc6l98LVTRouQ5A1Uqc4SPfpozgHaTdAX9A==');
define('AUTH_SALT',        'wNdp+vYxYApl+YG8AH/Gx80YccQO0OEEZiRyJQehTibAcWzhA8iWII5+WOC4EQtKUneV2THZ/DzAIo0bHtAlWg==');
define('SECURE_AUTH_SALT', 'K32HKYE5Lc3jgHey8OIC6sUhQC1husoKQ9jurx9y4raD4F/+4W+bdCxKnLQecTcYnAbqP38YXKEOquQv8P8IKg==');
define('LOGGED_IN_SALT',   'bHcWYNhd/GnY1gUDE5F9nPHHtEvw2vVaFYUKyztODm2OfIbCQp670GvVCh82cNcP4Hjr+46A0F3+bW2eTCwMmA==');
define('NONCE_SALT',       'O6hfDGAzfeIUcw3ghcQLOFiwlfoXSviYNFx77npG5B49gWblCXtrjyQvvKwZoBHKL0a5DAD60Zz1x7HEGQRY5w==');

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
