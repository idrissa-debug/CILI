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
define( 'DB_NAME', 'dk42ghvr_cilicon' );

/** MySQL database username */
define( 'DB_USER', 'dk42ghvr_cilicon' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':y%;vfBKB`6E9=?Kr=!fP;+GLjQUxT5=JTYvd=r!x0(<(Gp(D2UK<A$tzQ9~!1I5' );
define( 'SECURE_AUTH_KEY',  ']dwT![p]|PLOqvIZoAy1rZ#WX+@x$w{RAM> $z uqq%hEbq9L/clK9Z(nV6[<~cj' );
define( 'LOGGED_IN_KEY',    '93Wt>F%yDQC?@&N)-Orj~ncu JTgqkK7tQ>.#0q-O[dJ*iUTD:>{V(VaG3}c$,}!' );
define( 'NONCE_KEY',        'I9@>Y,F~FZ#lI~|JY}m<(1x/rzYh6AH c_%S;r[7nSfF1(;ey#]15oN7U)5|FSk+' );
define( 'AUTH_SALT',        '~_?]miIhrxmWVQ#V28ZEx#ZdVB+e)Sh1ZY9;i@I0D!K6^WN2=qNxcvuC BX4[]!(' );
define( 'SECURE_AUTH_SALT', '|EmX2!{sJj67^j~-frOarA;dpvMT7OcL~B]].mGbz+=S3^x_-CfZR#y[smlVcHuF' );
define( 'LOGGED_IN_SALT',   '`BGkRFyf##aJUXNB%B|jjD@f-I%@U*}Kr%+3KEE4eLh3P&nPaKhqnfN[x/~}x!q-' );
define( 'NONCE_SALT',       '?v]js4r<aE}8@ @2&F%[/[z[yIJ$$&UDBbpBPeYT/1ZepWLb2(y]]yTw~,^BD##s' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xyz_';

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
