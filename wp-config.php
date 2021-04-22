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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'IXX42a(;$CCKK~& E;d;O.q;6sbl4:+LNXAeN/W{E8IMbbbx*5v(2WiV%ngGjoF+' );
define( 'SECURE_AUTH_KEY',  ';^Y}ii?dMym&14rJ1!73h)TTQevnfG%0OvjV[RZNSPK7SOc,k,LmfV4:)v6i4On5' );
define( 'LOGGED_IN_KEY',    '~lWnTqxZ6dgAvPE~:]edZu`Pe6uc3=HXw$^HO+PFElrN~$Ea`{~_W<v)CT__=K~E' );
define( 'NONCE_KEY',        'avBwXNc.`ApWwCEc]./?%|)72B|I/?wz*z#V-F|?v!DY+8E]U{rEiGG)+q4=XBJk' );
define( 'AUTH_SALT',        'o>s$L%u[lGl#8+ui+QZ?.^^-Y! F&I Z]fyK6*Ljbx1%wc=2GfDP>(ftEpksK a6' );
define( 'SECURE_AUTH_SALT', '/Vjtkt*/>Cy;_}*ykGL~A#W-olnp:z6SZ]nsG<{&r63:$;zTJ$r`[0l|mGOIfr0]' );
define( 'LOGGED_IN_SALT',   '/yRj7x@9i6;1bBT&~X%e^C[a{A{06L`$k]{jIIat.!+uB.]sPge<9/CZt3l1^L0F' );
define( 'NONCE_SALT',       '4;_KuN{8&{=4>3?{5AlQ#Oj2A,-uUe~C.qVWteY0<suw~8_`-5QtS):1y7Lh[V>>' );

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
