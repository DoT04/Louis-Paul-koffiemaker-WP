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
define( 'DB_NAME', 'louispaul' );

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
define( 'AUTH_KEY',         'Q2IN`nc^Jim9Rea3oz5`+6v5vWP^mR:I/.CXP8pjkwaa@Abm!-%t+;ko__&b[nbW' );
define( 'SECURE_AUTH_KEY',  'DbK?vBm@Q<~/~nHM2Kt6;<s)dC)fp0?6It$h;7<y+JC?<+4[|MWmGocD>`Yqr;g4' );
define( 'LOGGED_IN_KEY',    'RX/B[jOyP<NrS/VD#uDy`[i~#f1uX{+l$-C[/:N}-WXqQ)@du5mZ_<2+R?%{TivH' );
define( 'NONCE_KEY',        'c&j4hK_[gS@m}Q#Il aA@el+ia-$%cBC4:#/Xl~o`D*/=]pi@QKD;Uxj%peq+^|q' );
define( 'AUTH_SALT',        'J5&_hmMG0hIs-=JB641&z_SdfWhRH}RH?1x.d$`u2Jxr:ue8OVYw5q;lGA<6P{Zz' );
define( 'SECURE_AUTH_SALT', 'Ye.4G)~duXMU{<*@MqqSX;]AYmfJ5F)/@@gZj(W:bnXN%Whv`PCN_1jho4O^~,et' );
define( 'LOGGED_IN_SALT',   '6.<Su* I^?Vu%=^K0D+n9Pn,,k_tkaqG_P@)EP]!$e3AmZjlp%pGv@Ln:eVBHX{Q' );
define( 'NONCE_SALT',       'I~$0_g~hdmR/M>w<CNoL;8G,,c@%|hw^?}ok>b,bNCB~k#(c#(gP[kP,-3?RhL&Q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lp_';

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
