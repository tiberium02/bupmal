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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'hpAaz<A=du8bXG7~T=,1A4l6s?bpXUaC{a})Dm[de~$Ypn0;WOle7XpY2:XgK-oj' );
define( 'SECURE_AUTH_KEY',  '2h7!FT/FOWVlYJQiyX]DKc3Qe`Wo,2gu3%w4[O4wNJezQ[qPKnITS5{|a???ot2d' );
define( 'LOGGED_IN_KEY',    'j)?1@UV1FWA8d/k2{NylMpfc6/>&rD=!n{AX8qRYFRvJ*<Jt9^^8e~/rWp+0e+Hr' );
define( 'NONCE_KEY',        'e-ls/<MLk8*W1BY$yfF[VHQV67U)xEFG+(C~Jx0hgt#e[_RuF@5#$,Kof1&!/Z0S' );
define( 'AUTH_SALT',        'uX^PS6K!0<HHngH.q^0vq!&&XOad|45;+qP%1+7.(f>^:IYp H4SLh|ZgpufO+TS' );
define( 'SECURE_AUTH_SALT', '/ee&_pW[0b[CS.!0p8Ufl^g>2gJq`dVEZ`Yh@q}k6nTb]{LL1g+lI& PW_yrS:M<' );
define( 'LOGGED_IN_SALT',   '}{o@+R2Hn{1GZi^C6s[JTsAn=fSARuI(I0]wr4EcRL49#!/!gQ>,VG5ydr6gw`)R' );
define( 'NONCE_SALT',       'kTn]xZjOMvPu#>n/2g#uTZ6C]g<K~!Y$*tcqR8U:u5}$YOx~TcXhxja HNwKdApI' );

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
