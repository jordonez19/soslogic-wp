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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '/86D_A8&[El.z3L.|j9QZ05t .hS4.a9S?wR^i RxB R)AO?T1#LPjwpc m&(XX(' );
define( 'SECURE_AUTH_KEY',   'P%|N]^WheCutydrqd2?w#tdgA&BJOym3x*xl|B}?%-hMZZVth;<yBe9_:{j&CBJD' );
define( 'LOGGED_IN_KEY',     '$X+G3,/o^v@oyWUx!z  Szz$N&^PFWlvGYy^h^[RoW1N6,V8mjNo{Y2MXOt?/.sS' );
define( 'NONCE_KEY',         'SQ^4C#l 8pmXWe66e2!3S#?.5Ou-fUE;!RQel^[q7~TRn+D=|UG^Ap{sm+UcTsbZ' );
define( 'AUTH_SALT',         'P3FXCC9y=)yyf?%f(J-em1Mwha0Zhcs*Wz*OT;X1>q63[2K@=8i5DYoYcII/.wbr' );
define( 'SECURE_AUTH_SALT',  '4MUe?|e3[-a77*m4M315oTr1)ojanj7_%IA5leT9$wV m<r0t}Y^_2QCqu<oI4sY' );
define( 'LOGGED_IN_SALT',    '0r1=| OHX3kKbb+w|HYy];-K3! .tZI1+BPm*kaw[FR#:M}kfCt32$n.5Lgj%`rC' );
define( 'NONCE_SALT',        '&B}36Q&[@E(E^f D:R9:);+|nHvBV>,N`S w;sbf/8;POGoE3{Cpo?XA|~Y`N;GS' );
define( 'WP_CACHE_KEY_SALT', '`EtL~G]oZ>>>krtLt;f[2E?cb35TKuiGw2EZZ%Hb;>9pf9d.jsr 2D+,wE&E1pP0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
