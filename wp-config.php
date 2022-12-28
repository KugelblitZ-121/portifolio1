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
define( 'DB_NAME', 'portifolio1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         'lEt0rfi0q|X]xo*8TfMYP:>L^@R33w9?=n(I5aknNM+f4PXDDh`NqD`%|o;0)Fr(' );
define( 'SECURE_AUTH_KEY',  'v*P{]}NYj9?_quRYtf%I<$yD{mQeM+i:)}A8d7GfnWDTOn9U=q7pQw_9_4 e1ba6' );
define( 'LOGGED_IN_KEY',    '&y0R}6`3FJQk_pETl^z-vH^Z]7AF%bRY|S10VTY;WgApZ+2_>y9mQpx(tU&z3}}>' );
define( 'NONCE_KEY',        'P^N-8Pw(T82]1{qa7v4~WY%uQy_o8PZ2o_..~XDEUfMP}A=,TdKT[-g9>m4b@^v>' );
define( 'AUTH_SALT',        'ZKti@C$q6+pUllW:VuA+ R$umYi><Rf;[9wU]p,gtbrU9&|:lI%JiQ.xGk4i0:f3' );
define( 'SECURE_AUTH_SALT', '4y b?Q9M<U%N3r34.SR/b[q:@^k_mx[!Q3oTF9^ZxYu[ 6 T*!k$6rjSjR+q0e>`' );
define( 'LOGGED_IN_SALT',   '%n`Z.N-&N^a:9D|V1=5xKl(#ast@XY2ISQ!;6T6lR?o)+2HUU-4tj]NIu7KE;ZFM' );
define( 'NONCE_SALT',       'k^iqPy$Lffi3JR6Z__H#8jK42c<{9^Rj`|0+$4uRNl,/p(Vhc4~p-P`[j[Rzg8M|' );

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
