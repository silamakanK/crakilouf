<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_seo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'passer' );

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
define( 'AUTH_KEY',         '.~i%f&eKU*GI/R50m6AN@0O]cr@h7`ws*gb5m;9%e|S.rBNz.0B}w&ATxDZ!5yFL' );
define( 'SECURE_AUTH_KEY',  'u6fb/rAJ7i%z$PXbU@IVqSw#3mw0stfO|O|~<{+o*m1Qqa61*( ]SIARKv>_N}=<' );
define( 'LOGGED_IN_KEY',    '+3g?{y|TU56UyJLFu:JBS]4utN8w}I8|UKQJ FrNO.~Ae]2`a4p$%bl~.XkW+=P-' );
define( 'NONCE_KEY',        '`5bmr%.7:kBh2Sk@~,?!kSK x%9>.QwlgLU`N~{6/2c>she](:ERJ1A7_bsgnjTG' );
define( 'AUTH_SALT',        '@W,>_q4|ePf?t_rRLkqvU)j^`m*CwFw!Pob6^Q+tL[H>s$U#QzK}I-3wvHDS.C9L' );
define( 'SECURE_AUTH_SALT', '=Cxp}mx79K2NNoTb8j&2+/!HWKRaq,y;xggr]!,7J7Gn^gs|ii;_g-%?d/~.%S(I' );
define( 'LOGGED_IN_SALT',   'cZ%@fz0Yy|z-:(tY^)SR=NE%|}?,C^F51OPN6Tb y)2E!J-&BzV2A`V2CtxP4AqJ' );
define( 'NONCE_SALT',       '[DFscE{7Aa-haHS%0)or2*6l@1<LwC7_8W|&:{DPYP<r^{fkfw%p(3FB)-I2ktC_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */
define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
