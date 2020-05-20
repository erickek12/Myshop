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
define( 'DB_NAME', 'myshop_db' );

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
define( 'AUTH_KEY',         'zWXsk}Ykg<>N`*:-)0,-p$d>>O[>8-MZTDzm%tO4l$YIjNqG14vSQL1!wwhep= G' );
define( 'SECURE_AUTH_KEY',  'Ndn&G:&>~0YMsdbw2{>jZ%PWR>5mr(-2SMN8r)sK4:2QZj_)^*d|]O]{rMXq6+8D' );
define( 'LOGGED_IN_KEY',    'LfKDn_<9_H&=JqwkQZUY^5b=Ek@8dEFn__x4j _f[6n5e&:NjJ4@4y<D3`wJ}{iR' );
define( 'NONCE_KEY',        'B~4qC(GA|&HdoDESRruWIdZ`0Q {~E`ER4gOor07Km=2-#5 oOQtn#F401R;HER|' );
define( 'AUTH_SALT',        '(XXzI{0 j6vZ-^9k[@:.IfQ_Kevl%a9nlg,i{b#1%w7>#Vnqj1@en$o)i7|Vh-<k' );
define( 'SECURE_AUTH_SALT', 'U,t^+P*)T:tp]C6BUXnm^uKM|j!A$odAmZompu)Lm00D7MjpY5{ -+L5Er;K~?>z' );
define( 'LOGGED_IN_SALT',   'w{3gpr|&XMzHatn|K7WLRexA9{@s${;gM/x]w#Y=l[$6y;KRV~)]GDGT@8wDg*kF' );
define( 'NONCE_SALT',       'fD6Smz;H%oB$@x+EFiH/yx#t@MIVx1dw%fFNk7G<$#~GA$AP,6)Z-CO~4$yZh_K+' );

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
