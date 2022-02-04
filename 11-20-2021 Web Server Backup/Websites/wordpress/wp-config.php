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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vex1999' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<IaFN3fh[EUT6^qO^iU<+./umPhvg`a~jkk?1.dWXg48SjJY{i<K$0Z-+8A.Qk*r' );
define( 'SECURE_AUTH_KEY',  'd6F{dRD5_o-t80t1HbfFphD#A>b7:x8c<&pL(r/ Z}A)gB`g.uvf=HFUMRlTd[IU' );
define( 'LOGGED_IN_KEY',    '?=nRh<tz4n[[AufH^4_:./&yr^2AcxP<wo|j-;2,4ahS:d;M_m(&pAdX(F$!QTb9' );
define( 'NONCE_KEY',        '`muk)7}5r;ir`H0 J6Ae0+c{!3fkJSWcK/1R?rvC#7:^aC%1 Cm7-Urgsjw>$r{z' );
define( 'AUTH_SALT',        '-%51rhrBhgKa,]O7ebDn!KskG[SgznwYx$M %V.e--C/.;!?owpSWo-jYuK^F~(r' );
define( 'SECURE_AUTH_SALT', '1;~yxUZi@-vnD7v0Fts|x3Pg*mKmss)T@@A`NnmmV~0)t2]@`>bMM!DFW4Iq=.Az' );
define( 'LOGGED_IN_SALT',   'z?4P-(8oW2uv-!WVgE7q|F Ti*&J;+]7EI@b.Ev;4(emp(6U#[C63aWAH_|Y_vs5' );
define( 'NONCE_SALT',       'TokC>jx>8XP?NjviJO7_iN+Ci*$olZBGOV)Cz,(2*N?<yAI,J;;iOh|0):5pK-h_' );
ini_set( 'upload_max_size' , '1GB' );
ini_set( 'post_max_size', '64M');
ini_set( 'max_execution_time', '300' );

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
