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
define( 'DB_NAME', 'biodata' );

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
define( 'AUTH_KEY',         'mg}@cX>3Qm.1*c]VLr)cL:d$;gsU-&oAP=j?#/% G*v]~/8Yzo9)Z9fe7@kZa|jj' );
define( 'SECURE_AUTH_KEY',  '?+BnS%-4#R&|(caDY3Jh2TzWOu5^3GY+;!i!$@Ukni^`yqT_HxQ[t7`BY]9>I0zo' );
define( 'LOGGED_IN_KEY',    'uV4o*RJC[>m/f;D|Vv.ci,-D7 B6Ke=6%r (Qtz3Jn;>Kwd`,[xN,Cr4Tzam~}j`' );
define( 'NONCE_KEY',        'TW7xK5a-bJPnirAZ6,i?Uc~r-O2bh{``:nJ&]xdzEE<(=1D(mRJX.=W:cqem!Y%:' );
define( 'AUTH_SALT',        'd64:~T*1Q<i*q[Kb}<#2a@lw*MD0u5w<x68l_-/X39r{xI(EAe75z&QR@%ycO~8z' );
define( 'SECURE_AUTH_SALT', '^7c,YYX1y6^pB9oOs0-?h=~qAc%Xd367Muph;4{l}wl@R>#{2g/aoJ{ei:DqR8T2' );
define( 'LOGGED_IN_SALT',   '.2s{<`2L57H.QNB> Q}BGGqyPob&PO<*^n=ZOK4u#;-b[B*.j8_L,;||_DL%Iu8z' );
define( 'NONCE_SALT',       'fcAz/tch5Uz:(^7Op6%o(g6&lZ?X (!1=siaK%Q/&ci7^s- (0h/,NAe[B4z<Iwb' );

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
