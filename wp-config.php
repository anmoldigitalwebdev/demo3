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
define( 'DB_NAME', 'demo3' );

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
define( 'AUTH_KEY',         'Dn<j$uMmkaFqT@+$u#V9%6&i)(6mn{tpshQ=>U1=yC>mEc-lda<qp9:1._w/ 5Dt' );
define( 'SECURE_AUTH_KEY',  '<c:60+]STX9yNX]s,{NK>dQ1}HOn-]y=%~f)Cu_ p@<vZD7R|NMU9!krwy8>2_ b' );
define( 'LOGGED_IN_KEY',    'g=-|tR2@p6c*r>3{pb);>.v`QAsU:JQ]s-)=9M0pUX-pE5_?62t%:mRV]SC6tUvx' );
define( 'NONCE_KEY',        '+g~HJr,<_`V eNo/b@]7 FueZ(h>(o$Q7h+k%r`jh9yGf88Pt/TJ]Ta{.j<rYZQ,' );
define( 'AUTH_SALT',        '&ky5t$mI@hl=tCrWzXye!=n@`&&.SG5&SB)6sT=i4brKe-8RCm cz[j4exm40V5p' );
define( 'SECURE_AUTH_SALT', 'rL^8P&v C_,^6`=K^(Lgnt2Q<y^%lJNiwZPg!RNyX7z4o4OdmS)$Tif-$}(W7+ A' );
define( 'LOGGED_IN_SALT',   'ql`K^;t<ynv#D#PdJ=)@S8(I^j$GoDGntKTlE80cXx&NuqEBR+X6+^b*$4`(S*L@' );
define( 'NONCE_SALT',       'aHxFc{IAk*mVz4M-}MH@mP01i;KNfE=?h_Nn]N>$xPNbxMK7TMb:#?{qRa%sy%{9' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
