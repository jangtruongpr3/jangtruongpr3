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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jangtruongpr3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'L4Y)3~!rS V-3Uo n;wdG8kIkpTniY{BeB=I4G=00Q.f7( vA-<;DT|Cf GW?r7.' );
define( 'SECURE_AUTH_KEY',  'E|O dP>YlS#Jg;t=dN|q#HAF `N(`tLgFgt?YBwP{^j,9fr6BZ&B3d$_?y?=xVT_' );
define( 'LOGGED_IN_KEY',    'Iwg3g.Gk;X;^j2*gFVQUQ}>xoG9{3ro_(:?~q~alWxs[I.awPyAXRS<~xGk?WCY ' );
define( 'NONCE_KEY',        'b[|c_rt&G2!rdN#tG)5-#ZM{~16qN$dvf&Vj{y.f9i$.CQ~!+w`9jI$]q2{uqfoO' );
define( 'AUTH_SALT',        'M3WKi9/;zb&-iw*e}Ne{^SK,Y*@Wm=yEO%:GxSS6Z-%NZ(|^]L$zpbV4pR&Q.{)s' );
define( 'SECURE_AUTH_SALT', 'uaD6D%m>^:iJL%;xj~hh~4@?2XEodBn$s7fz!#v1pTO05bW}VhOPIa@Pv7B_6pI_' );
define( 'LOGGED_IN_SALT',   'ggac^`|>f*~MF{?-6?.VeS<{]yl[ Q/WsL?S~_7m[asG&QV-tTAhub&@WgY=)q_1' );
define( 'NONCE_SALT',       'h4B!HZ?I][c]Tw}rnTR8)<;oc]%x/>u|y]OkLp |:QZ&$:I::T;=R OolUYM=3RU' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
