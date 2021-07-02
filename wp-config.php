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
define( 'DB_NAME', 'bayAccounting' );

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
define( 'AUTH_KEY',         'C,ff/5m^=6.z*/ow,$FJ#r ok</Mb_b5e{8?=oLVlUWu%w8+B:{r=]0jg/Mc(-m9' );
define( 'SECURE_AUTH_KEY',  'h$g2:6HL+E/[)E<K?qLk9 cvuV~d]Bg3h~e$`0FLfhMliV^o3_tYvcrjHs`i:wCe' );
define( 'LOGGED_IN_KEY',    't4Rbv:`8)W%+|e3BT|`c@Jv,c~W=s;PiK|R1{n2_.5D/YO6k0KCqZ&q]v5ZD1%|~' );
define( 'NONCE_KEY',        'p@W[BD%iWw2lQ{6%z2v.odQy@i+7CveS=X9d:Yhov+>7F{ksg9MU|`x&mk|e%tH^' );
define( 'AUTH_SALT',        '/3GWabHeH#3AGsItOR8mM@wbvvhxzRft+.hW[p!Z+B1g?hUCM]>ZN2%[3P:wvyU}' );
define( 'SECURE_AUTH_SALT', '1MXC$Zv.YoxwJ}xcIbe72]C&4C_3w>|s9pNbs!1YJ?(e!J:[z!=Cc6h9jOy%$h0b' );
define( 'LOGGED_IN_SALT',   '94x>)*H-!.!$T{(a{JmhH,wyID[&$/B9@#Dg/s+]Kw73qPj3!izw#bkTgmPo{%D-' );
define( 'NONCE_SALT',       'w|}z,hoI{9DX@k+`}B8[N6P+T$iYi~5!QY;#6E=UY(BHP3Z{VYB9MeVu*BGc9Pz6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ba_';

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
