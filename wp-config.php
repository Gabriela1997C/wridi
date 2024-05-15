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
define( 'DB_NAME', 'wridi' );

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
define( 'AUTH_KEY',         '#G9[HY5sN++D0Q05=4L:%(dSyc{|siQfsfYw(PQ0k/7|S50RLWL>I4auhdx3wZz_' );
define( 'SECURE_AUTH_KEY',  'LjE<Y3*BL7FAWOhMs_M0F/GjHi~.Ppwn!{[kaj/UKr@*,@Djf<zrSA-OLrfaTg0F' );
define( 'LOGGED_IN_KEY',    'z5[fWtMF)m^,eR/]E>@=T^iIFBC`/D%R} 7k.!IX1+[H5||.th(F3E$69$;{(7`=' );
define( 'NONCE_KEY',        'P5n(>y))m%;~)ui$dJ{f23;f#IWVbXoaej%P&@;JvmgUzft<% 5 <f<CeuH(Nt^6' );
define( 'AUTH_SALT',        'BW.e}r&&[yWtHfkr_IC;3s/mY8)BUk^lXaE~H4ZUfI#I*J;B&}9P}gSTX5D{i:h=' );
define( 'SECURE_AUTH_SALT', 'qvpEp(!lmJlkfAzsa0$afUmZkYi9vHwlzYA,|9-.kRL1f4)S007]J3DX-bkFq/FA' );
define( 'LOGGED_IN_SALT',   'DJ(|3{uNA`=)zwf*oF^Ybp5Fzv!A-^LJIM.F[J`E&OS#v_W^|WDV#O!{ukL)7jPw' );
define( 'NONCE_SALT',       'SDJ_? d/+My~}kS8aa2Y*KMp{2XVyJ-dNv^kSn,tC6S67ydl*9M/SYC1 1ge|yW/' );

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
