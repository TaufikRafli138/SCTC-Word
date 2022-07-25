<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sctc_lab' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zYJ^c#,tA>a2AE@p^a)y}`ZVp?JFNQM?n]U]1K!8H}ud2-A%NxVY<r&q4Oh!q:iH' );
define( 'SECURE_AUTH_KEY',  'n9^GM1d<Tc)S;>=8h>}i$Nx2;j]H%@Dum5Q6/u_C(&ws:,!9A<>bI%m$<ircBaB[' );
define( 'LOGGED_IN_KEY',    'di+4@KsQ1>B^b<->:XnVSHip4Q@]Ac0h2A&yEH?$-T/C@Yz62lX>Db1Q9oZc53.3' );
define( 'NONCE_KEY',        'AwHdmUFew/#bA.Ti!c>_tE|lX`}+2@_B`OB_#xe*8vzoPE8BQoP@>m~@]ZZU%xDc' );
define( 'AUTH_SALT',        'B 572f?TlK6b{42<nGC-JmPEqp-`WAcM}(S?|L#zrBq?_J`UA^YB>Cxtxzc1Z5H]' );
define( 'SECURE_AUTH_SALT', 'bHEr;7E[iG2l.0-2]R3{MT5Z>k6fbOQ&`gI&P$z7r:;gB69oFyaWg,6#&llM#0QP' );
define( 'LOGGED_IN_SALT',   'WxI;%m*M[cx%a!R2Y~s~.08;Mnh~v!Dgw Sa%,491zKZE_1SMCsncGzkIq.10$st' );
define( 'NONCE_SALT',       'G5-&{=cBf(Sy_O+R&)EH]eX=1 V}[eaXovr?jOMqmxFBjo$PYZwY)WBwJY}?+-GJ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
