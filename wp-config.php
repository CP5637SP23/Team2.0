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
define('DB_NAME', 'Prashanth');

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
define('AUTH_KEY',         '?W)mn-@UnLIG]Vi7~wg9Ml4p$0 _y^RU0tDLo.BYekZadWtEm4x-5kS?`GtBeJB)');
define('SECURE_AUTH_KEY',  'pwUC~(c$w9Ff_P$9_gc+C)rA<_<.0+ChrWlI)DosD}-G3y&(p$!K~< ?Ht+i]V%9');
define('LOGGED_IN_KEY',    'ep mJUi9VAD:(!HTkuzC,T|P,:_{o*kSAubngnM]`lN%FA##hr&42)zy(jp2o2`Q');
define('NONCE_KEY',        'O7^j9jcO`v=F7kv$dd):E%orT6P$W5XLmbV-p8s&BwH.E:Zz7&?:{S!<($x~kxx<');
define('AUTH_SALT',        'cmkTT=geYPEO,m4{AL=)V3ub`Eq P9?wxr-x(qffX[&T1=OdKyb^L<E#ue.6)ArP');
define('SECURE_AUTH_SALT', '1,KM|8*EEwi{k;<2Zt!jRW,4W2S;H8Vh?=5pCt&,k,Fph*tJL@m=0,[u*/tSWbh;');
define('LOGGED_IN_SALT',   '}c%JMD%u&v7MTq1!q_o/#V`5dqHoe7m:mlR/]JMGO0$x]C`BNqD<*i#pN--2PZ2L');
define('NONCE_SALT',       'p%/1Tm}j#Gv>F*33*[hZ}JN1$?ps)yMF}m%d!h)i.$,WQ[ j`iIwrwy@0/$*l(1O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
