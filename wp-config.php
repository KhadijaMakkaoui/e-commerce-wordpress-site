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
define( 'DB_NAME', 'ecommerce_wordpress' );

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
define( 'AUTH_KEY',         'TV~3YB`IgKR2q`Bhfm|Aau.MK*~}-}k!oUf>AteS-vxG!#&P[PUo:qPN2_1|WCR(' );
define( 'SECURE_AUTH_KEY',  '28<w^&) V8g!yxmQB!1~D9 $]Z<?33gb!;cEVW8tf^wl6U-t 5!U6e,fKqO*^HA5' );
define( 'LOGGED_IN_KEY',    ',OA/tIlmmB0>5S*Xg[8U^FCWRpw!DR*>bOiO89V7JICEo*lH5+#?f#OVe,OU.<5%' );
define( 'NONCE_KEY',        'H[F?EH2@qc!8b+Sr~u,[oDS#ImjzQ7H<il~XVK|tcW`.^hC72Jk<ajHB:UQm4vR`' );
define( 'AUTH_SALT',        '+AXh{?nQcZJl5VFkjXvUMc^JObd3,@<7(%q,j~x }<+f,H%kKs( 5~1{Uhf@/zv`' );
define( 'SECURE_AUTH_SALT', 'Dm zn*#oo:4M))+B|PH6FDVY^09WB<=Ma<1b4wg`nPNK[ +aHJ2<3lR&c9Z&^OJO' );
define( 'LOGGED_IN_SALT',   '`^_SC6!|9encz=Ou;IuVb!E4.I<3R?|h8l!~Ec#;]>`MtY-F4vgg;pf#)T?Wi2G[' );
define( 'NONCE_SALT',       '<nWBAB+(@ju>[vJ,vC&~E!&!F)%uOv;&R>wy^1_0&<+OFXl;BAj,,JuV^p<p3d%a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_e_commerce';

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
