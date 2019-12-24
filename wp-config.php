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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         '[Nn>0.#Z9^Po@ @MHv)}aDzih_=(p]p[}F7Tlpb]F.+pk]5GCNWO<8y<3w^2GF4h' );

define( 'SECURE_AUTH_KEY',  '.*J_D3>VFKtRgfSAY#SbWru,#bNTXLQBn=*a!p8[a}>].JF*iCgD+-u&jao/`_& ' );

define( 'LOGGED_IN_KEY',    '%^i$ Djw`v^Pb^Gv!uix+Hb(H@#fhMgf6uwum@u)el1^{X>-1~wWGi)(m.Z2ec5J' );

define( 'NONCE_KEY',        '17]8tb4t/[Smojr _P/HGTVr4E(F._l|(6frZPyz-kg+{oT7LfA{NpiZg.d67=]M' );

define( 'AUTH_SALT',        'y/ ] U7`KH!SWi/y04]a5E;,4KE/*#p^Jv*<U#{_*+~Dq-63<vgL875Uwx*LS5(2' );

define( 'SECURE_AUTH_SALT', 'kXA}Qo9;,Y|_G]3>Ac|hwfebLbr!%wZ+X^fTzHl@3h*GL*IYk@kog.Eu}M@yVN g' );

define( 'LOGGED_IN_SALT',   'Qrgy}4Ed-M?9%u#`cB.*[(HBtO @AFR{y-csW:9x[9+e5]BbjxoZjYn<6}&}tI~1' );

define( 'NONCE_SALT',       'm}orMC>Eg ng%x; kdDp!!c` >daIAS=>/aJB*.Y-wGo$=!@Id/7YcTr:?N95lJO' );


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

