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
define( 'DB_NAME', 'thandeka' );

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
define( 'AUTH_KEY',         'p? U4rzs%yuR)}EDXB_=?b[MdR&B<WAyp[3(c9y}5qm~-1gG(AJg[=b#/nGQ-Tzv' );
define( 'SECURE_AUTH_KEY',  '/,w%|jLGf xAI ]JRNV,qAsAwHVE,iwoCzoN}2!fxzt?zr`xQSQ_DCRSAcck0c}=' );
define( 'LOGGED_IN_KEY',    'w aIN57Kg{J]OnjHBFo^v0VUl9`.ejRMZW-i)e(o=d&M0k0qH|4|t=)4HJu]IKv*' );
define( 'NONCE_KEY',        '~DlA}1}1Jl_]#J[,_9>nV4z_H1vBD_R_Ea0(`C1*uN2u Yd>HJ1:al_ya.`~v&8R' );
define( 'AUTH_SALT',        'VoASM*L/kA{+}?7nh!jRg(G#0;d9Y:q$jbKwkPY:.A+<UtzBW:R,vUPeD<$GG.Rs' );
define( 'SECURE_AUTH_SALT', '3zjUA+&~FIE}~Nl6g%Abt*.4loU)V( ZBPl[A}{94^OBOuL^ohZ2vp=IAN/&=fk?' );
define( 'LOGGED_IN_SALT',   'D=F)F0k0x?L[1 Vp}t;~|$746xH99_Qb[{mI0*4S! Ek<eM}QhBY.zJYPs</?ttW' );
define( 'NONCE_SALT',       '5Kc{H6KgFIfY,p#,~zpr5p[?nVPiI!uI$3~&s%[1Jqw)2yJfb j]c=LJc99&h-NB' );

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
