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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jss268' );

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
define( 'AUTH_KEY',         '80k)j=nuY]*,7tyC+q}lc?nR;Mfh]_:]0s{&:5lJ8M5A4nk;{QI^Qz;*gvQptlyA' );
define( 'SECURE_AUTH_KEY',  '^p;P:;Ar EkJa)J,*hS(UW$Tr->{:+o91bM-&T<3/q$mA|Z]ff]8&*9c:az-NQI!' );
define( 'LOGGED_IN_KEY',    '@ux+Ubs,IC >/d_,~z)@*{G:xP,abY@LGp`V5:rDEYr>)~3HS|C4&!%F|0MMI:nq' );
define( 'NONCE_KEY',        's#Zkd~g$u<a7(NLBdUdData&0ECl{v=_n-A>)LRw_L.>60EfKU6d:608,a):w)vh' );
define( 'AUTH_SALT',        'Rtjk23_`[2)P[kp8pt(Xr{;3kjKNcwKRn)Zr Fe),KDWlB^&U5W#$AM1=6p| #t&' );
define( 'SECURE_AUTH_SALT', 'Nw8^o@(}[ H0V)p&hAq?9(e81@55[KJYi5OeN+m6gm(Z2>WTZQo[$I<UbJ-XjG4+' );
define( 'LOGGED_IN_SALT',   'tDVn<$j%?JB6{9B%<_*#+L6%uQNw7kaB2&=IT.DmIj-|,=N9C0m{}5 c/o[h!e^c' );
define( 'NONCE_SALT',       '3 &iyRw,:y}l^+&IWtq8*LW oThFXd<V=cgQO;RykcQ`0/XP{t?Ob,;in!&PcF^W' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
