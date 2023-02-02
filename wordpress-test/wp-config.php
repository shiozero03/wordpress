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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         'XFw_4To<JN*YF^aFjL-WO(jLDb/ 9`3bs@vsJQy`K-%f9#9amp,yn9+,@BCVkL@W' );
define( 'SECURE_AUTH_KEY',  'S[?|xBg+Z(!*z_9._EX0m~+/U9(~mWWkF7R#K=#QFJ{Lo8871dcQ@Z1l%O(Z SIF' );
define( 'LOGGED_IN_KEY',    'Oj<nbs_<^Bj n5c=#2RE@7n+Q[ommW{}x6B v]GUuOb-ZK$Lm~`@2#Nd<Na H`yn' );
define( 'NONCE_KEY',        'j2U#Ow~Xu;,(*)ol1pNpOsQ/MTX8.P%9~%f<gMz^q.|TJrYN{#v,h8%2}/U{j2^/' );
define( 'AUTH_SALT',        'p*? zO4SSM.T/GVn;&}m;o5Y[l;=gu_4&8pqJ9v}M%f/x=5j_4Ce?l:o)CWeL82>' );
define( 'SECURE_AUTH_SALT', 't[ 2<I1jFj8uLXpKu ]hb^?|5_KvovtNJ 9&la+L0VF`Bh{Aohgj&A--9j&~TJVN' );
define( 'LOGGED_IN_SALT',   'c1a(L>anG.Xdw0e+?^y|K%EAC8:$dQU|CG()>Ir^kwDZ#t)^;D,~HaP_.]<sAnSk' );
define( 'NONCE_SALT',       '+KD:e~ppSY!aw)1o._jUQ?n%)puV`DVhGS-W+6@@71lN_;.!3y+4*[l<5JAi&h1a' );

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
