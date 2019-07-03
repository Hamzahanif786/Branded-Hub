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
define( 'DB_NAME', 'Khokha' );

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
define( 'AUTH_KEY',         '(bz2^y+Eq<!:[`Ly%FU|RTpU`O<UZBTV<,um`KkKV,=)~0Hhi4T)9<4F7%,a!~]t' );
define( 'SECURE_AUTH_KEY',  '(M|r+F4+<q[##Ho!`DW!;&~TP<Tc1$<#GC%PsrTR+3?5TG}sp5R+}!q8iYR$6u~V' );
define( 'LOGGED_IN_KEY',    '!OF7oKSn?,WJVm_;?lU;$%4ctaF +jm<lN<J8/g,)Fv,-h*t1:kfKh@(%+<0GF)M' );
define( 'NONCE_KEY',        's.B`c^6^#./nk8sR|Hq2Y3z&c(wE>sfp!WZ4h>Tr3LBN%glU:>&#OVTLTc``Y)fy' );
define( 'AUTH_SALT',        'so2i.IGt4`u6MOM}~P*Yb]aBm|06kYcA>-qc0WABKci,aA_3/Ejc@7$7(5z{ReWn' );
define( 'SECURE_AUTH_SALT', 'FZGzfEH3c>ha%a2 h6JsI,[9c3[i%EWgw=ddzdqN.$PQ@0iv^$Tt&1#|@.8~a6Xc' );
define( 'LOGGED_IN_SALT',   'Jz,n~ch.dl{1M{&v@#Aia=QUJ~([cd7FW.mc$PvBCNRhT8M([Ef]),AK!wcb<oHr' );
define( 'NONCE_SALT',       '~OUJ(#2ODV?UWxyz&]s#kOyV@hDOCrI/Ty#&]xw?Q%XB9kN=35B@jy(0y0r9X6L)' );

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
