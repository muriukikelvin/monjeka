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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heroku_a4250a49a579274' );

/** MySQL database username */
define( 'DB_USER', 'b3d5e7cc4460e4' );

/** MySQL database password */
define( 'DB_PASSWORD', 'faa1288b' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-02.cleardb.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6>=KObi55v.8oSi]KV-kMHg+-0uZjC$d-(U;8wd5!&))[y+sUJ{K@#$geMdrVHdO' );
define( 'SECURE_AUTH_KEY',  'iL&blrmgD@wN6qkAVQBO:[xR^t^Cl?-b}z,1nnh}j1m$feyHG4%^I8/`Jy=:TKw?' );
define( 'LOGGED_IN_KEY',    '-BSodR$u7e2(^bL@S]k:IT>QZ|4Lq9L.;S==~`]rfGNG=&Rr<r<mP^]+02Ow7|m+' );
define( 'NONCE_KEY',        '-b%y>/x!Y3k7s%QDit/{={3;0lc3E=#6CtDn?$q]JHCXA/ji?2SpWSyQo2K-8k6-' );
define( 'AUTH_SALT',        '2lV:K<:|kX2$jKWNgO3LfBhK->UJU|_#B)p1Fg{-f8veIy^g?onw~LBO9#>|iXtM' );
define( 'SECURE_AUTH_SALT', '#Bn/>HzoxbckpD92! 5D;PqX!EI XP!0~;|%o$#1ZE3Elni-fBl>jlHg=.qBDJ/G' );
define( 'LOGGED_IN_SALT',   'R=j}-88%6ufJ2kqO|u>[S|8n1s P%rv(g?aCRd-apY3dQ4wMJOv<z]#a2|UcF3W~' );
define( 'NONCE_SALT',       '~fAOh>P|]=5L&ui:Fzr}8ibeiJLMi*xaGsmjtHlRer(6bKkbx9|AADohl-+3?Hno' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
