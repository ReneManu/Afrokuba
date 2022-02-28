<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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

define( 'DB_NAME', "afrokubadb" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'Y+*|7R2rF)xc[}s|O1#|Hy][adUnWztzgYGWg~_<6q}orMQZq:zncc$s5NJ-o<hn' );

define( 'SECURE_AUTH_KEY',  'P44:No/LW=Ro{1)0zU6J7[2-F57xEyHp5qwgR7uicP]RYRVPR:=6w<FV~!^m5pl.' );

define( 'LOGGED_IN_KEY',    'L oZDQ<mkd~yg~8?eQHtyfB[20mq$nSf%>D;m}ygNoCQ>.0-H#i?PbSwD@]W0cH2' );

define( 'NONCE_KEY',        ']Of1b=l$S Y_nnYiWXS69gxjwhM3:{SsKGjx;CjUt+(UsaBnU[0;nb1}fXDZ@sxU' );

define( 'AUTH_SALT',        '^)s#lzpIkr8FJGS.ATCD.+W1wZ`Wf1RCq:sOtRVVKV;~Lb;<O4f{Rj*a{*J);;Bs' );

define( 'SECURE_AUTH_SALT', 'M9^CikD85YG;${U-EB[^fi)KU.69Lbk6{ml~0%o@?(|PUQwWZ{{$,_`MYxfJvdEm' );

define( 'LOGGED_IN_SALT',   '3kkJ!{W~S(LW=+{sCvr+3uH-:~=}&%3z:B][!#M0rgFO~#xuYh__6:M!4h3m65j5' );

define( 'NONCE_SALT',       'o@!GZn3E[C/fmr1>J1@b@=-G*=&m@ WC!tC{;fs(Jy)q(ZONey`FgodKJLV=_vy.' );


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

