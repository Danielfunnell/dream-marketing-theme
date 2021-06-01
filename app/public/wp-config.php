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
define('AUTH_KEY',         '+LMOuKcY9iFdbuACH8RjUu8yXv3bfNGrBx6fPWwkXNHINckuTKjYxfIiG0dSSe+JTnu400jamR7EyCxKG1rR9Q==');
define('SECURE_AUTH_KEY',  'r7YhU/hStlc5XSpKrReQJi7hdHL/GQFVQIkJiAZZssH9J4tgYrQ8onZB5P3kufOYp6+PLqUZeuF0ykawGNma3g==');
define('LOGGED_IN_KEY',    'BPp95J7gE5hNahDZrbH01tRKGZvKe8QR4TFAT/eS+ZeI+wIuYmwW5c/45P+vQYMu9GJdiKQq645vdrddb2AndQ==');
define('NONCE_KEY',        'Q2eMAHxCPUL9l2CV++EbDApqVyQvLNdmZ4OIfL3Go9L3Y4L1bngA6vXqsBZxNfSU2eRQyagvpcjvsSzc3Nw+2Q==');
define('AUTH_SALT',        'cJ5wht4SPqjxJO/OjiU92r9SOdqE37hUGBK7Lh5RYOJeGtBQfoHdRGUNFk09ABBn5YyALWiui5UooRQVVPMP9A==');
define('SECURE_AUTH_SALT', '9TstspN01zkyp5CvPcXltfuJ2e3OyZOyl6z52qxj5ps/WFnEMUL4t02rWlUoZ6eACblS+SWPqhiXgl3v3Upskw==');
define('LOGGED_IN_SALT',   'WAyMFdScSeZfcddn6ntqAgf5vdNN5GYBIMYNGJGuj1t4koWhw5yTNxmP3HQlugorEYRMaTuCeD7D176eDVYrog==');
define('NONCE_SALT',       'dP8qSJp9MbKZFAhf3G6fjIuewtUPuJ1YNtbv3GlQdR0TWf+d3szQUwqXWBlQG4BJjnVB18TTsGSTGQND3/NrBQ==');

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
