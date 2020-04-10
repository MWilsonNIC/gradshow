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
define( 'DB_NAME', 'gradshow' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~9kI;D-_rz:|DwEs9Fgs9k.y+!W&M$nbc>-lm(r^~/Emf%`J0k 6LBZvc,|z0vPl' );
define( 'SECURE_AUTH_KEY',  '{ay8!D6/=ARm1Uz|D8SlU~nIYrE@/5{Dy876l.U0X&83J*s=i# %%3E68=:VD[@H' );
define( 'LOGGED_IN_KEY',    '$HWwQ//}-:Aa*]}44Mz8Dd&wTN:M!oB~9 1F%LBk;:n2gC3lbtT8<AF}}ebt7gNE' );
define( 'NONCE_KEY',        'Px/?N~jUBN^`x~LgBVO<svY|g1P_JUt#VZRsjDJq,B/aIc/JO~{#U{g-/uHBf4cC' );
define( 'AUTH_SALT',        ']#h+u*7RhvCJ><lT!&;KlBRBJ*Cg/;[eF|JORls~F:bg}a=b9m;IO$Z.F[R}Wg]^' );
define( 'SECURE_AUTH_SALT', '#3a/0c[1)wo0094(U@0X%`LI)DDEq)cnxARASBMvFfk6Y++5rH{N/[sv>DgvK#;]' );
define( 'LOGGED_IN_SALT',   '[CxJ=4q{DP:nhC== $01-Q2!9CO#Kv(<E][uWAfeNyrL1g#3n%CB&dy H8(x *V`' );
define( 'NONCE_SALT',       'Ri;-)B2#Qfp.<}Nn7<]i.Ne;7UTpsu%h}<h4KSA`-m/b!ads`B2QqnJO#79Pog46' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
