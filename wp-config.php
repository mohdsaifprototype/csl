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
define('DB_NAME', 'CSL');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Gj)e&qd1pG#cv!Lxw8<TdF#>7<)|}T4V!Wi=60CFj,x_ZNX/X~`QT43y&;sL^h?Y');
define('SECURE_AUTH_KEY',  '6mcd-<3YYJ18232U(|S}1z.^b<1ElRFVC!7(6)3DH& x70:.3%h@{b}OWF+iVLYR');
define('LOGGED_IN_KEY',    'n;Xj*/miJ%^I;j<C6Vf13S7:s1dBEgW/71Y^9@7,P&,-_L`s0+lZSVZa0^hgv7@G');
define('NONCE_KEY',        'L2+%khI.- |>3_Wphf%wf97 4 ,tf>:OLun=(?=*9Gz=}kbuTNm@evMn!7WO[e/(');
define('AUTH_SALT',        'pGQf!]lt#ewC.1f}]&VyK.QVA7ShQt/Wd/_DM e%8#04d9m>G|Iy<&;}_230u_K:');
define('SECURE_AUTH_SALT', 'x]oT2OjO%;xcpd[uEC~6Kb7pGJ<gLMp$Et@3jbW~lw3TnYrf[OG[oH=%bsT>me+G');
define('LOGGED_IN_SALT',   '.2+^hBeRZ.!-X81f_d]~l2>%WGo%D]C1YR>9IVRJ KP%w=g.m1@B;vt+:o4uwD/s');
define('NONCE_SALT',       'yZg1P8M16:OP]@&pS.Rm8!0%e0,MNVar?]_r0>4r>]]F4}z[ki/GS/TS3@Tt::%h');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
