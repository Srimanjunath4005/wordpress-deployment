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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', '5160@Nani' );

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
define( 'AUTH_KEY',         'BaBzm%qm8!kaJg@+7(_oa{(Od9t?.+A=)%:C74N:^@)!?.j(39zbyjwT$0h3zl#^' );
define( 'SECURE_AUTH_KEY',  'RE@W_MfT#NFH?4~w;7JU gD/TI8Y:Nz6S;m8<*IlN0#1OdD+!>2o 7A-PQ1h@a.i' );
define( 'LOGGED_IN_KEY',    '=%5tL@7O{Wk#L3s&g$rW`12k:1(g[$gHn8Jfa1L3wEp~_1gdi9~hJR5DDM_uV,<w' );
define( 'NONCE_KEY',        'Hok5cfzhVfsUBxas7RZG#ZuuK:o35| db>wm9NfKWpv=O$T{!,Mc_sB*t`:V*N`g' );
define( 'AUTH_SALT',        '!G,uFwtSa6y 9IsjLv@KQkZ0JW)p5myVE7?i_Zs;~9ki?5-r4vJo8#)|>$5+D()!' );
define( 'SECURE_AUTH_SALT', 'eV}8S-$bTRRi5M/R1eLA)wN5~!J6lnkz|a=6jt%Fg- ,^e{dn+N$5e[|hC=//2~&' );
define( 'LOGGED_IN_SALT',   'rm2W!BI)$I@Ff7-OR2zQ:&7S/BO{70^.F$kY5Vb+qm;Q_}v)wYn:gYVBNlH6zZ_R' );
define( 'NONCE_SALT',       '^8]u{DN%xZ7[rjrM0-#}PA_c,Y$Qx Y@p| S@Hj_,Qn{fjGxU5SV6tQ};-wbO?X+' );

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
