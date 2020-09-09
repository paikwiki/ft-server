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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'D[ra%Rm?crd#drL2KUDMm^!0X[Y%_mh<@x#).3B6RenQs/Ns{Vu?P!KK(X%-56B5' );
define( 'SECURE_AUTH_KEY',  'T9-+5rO-eXSaZ1/K^0[a9y__cM)=+SRGqgj2zEWr,<B!!S,H3{j;g_7~(%cHvvy@' );
define( 'LOGGED_IN_KEY',    'wl,s+xI&n4!HG7(kx}?bjgTFJsF2|!15cM>>mAYGB29uMdn_i-Ercdr51g9b7JKa' );
define( 'NONCE_KEY',        '%Vov&wP_EI+s`@`6^d+E:e/?Mko6{B~aBlQE]<o9A-o7iLC*/l&c(+o/ojbY1Bq(' );
define( 'AUTH_SALT',        '`6):or8~(]j_iX~ywc/Re&I9?<q,0QjUaPR7BRYvE$,IlP2fy,BKufKEEz<evgoK' );
define( 'SECURE_AUTH_SALT', 'D.v<pxqw[5D2lAL&]~MYsLpQYz{rc-=)GmcqtpiwiZAQK5M&K/UllZ/N##$PoCR2' );
define( 'LOGGED_IN_SALT',   '4JoxA>l:_f5st[xsGi.B*b:Ng0`0YJN&~+fGU:;l2oe`Qm|=12C_Mv|re#o(i8R9' );
define( 'NONCE_SALT',       '^(gD?i6[7NJ)j_RA0ED7@M}bRL7$wTS%PD_DI|2|X4+X?e#e`IXBhYjHz$K|ivJ-' );

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
