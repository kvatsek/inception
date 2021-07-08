 <?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'aantonin' );

/** MySQL database password */
define( 'DB_PASSWORD', '456' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Hw9<-r-K#a9Hgi)?p;gf+ |+ld0JSLFe #:4{12;9xbs+WX]^ZshIm!:6?Xc!%3@');
define('SECURE_AUTH_KEY',  '*LtcUNdR0C@-|vnZK+fQ5b#,P~JO;XQ9t,{XMvc&T{5}U!_6||dSKpXyH^ $]&bk');
define('LOGGED_IN_KEY',    's6}a=->w:cutB*U5K^*oj4]ff|lHk`-W8ArZ5<|jd,E%IIb/sX|b&}7KdA&RhF73');
define('NONCE_KEY',        'z)]9v(Q[qY<lhe&YQwJ)D clo(-j(Pz!h=xD:3|U*LyE1z;3yw)>3$%+Q2:o&-`C');
define('AUTH_SALT',        'V^#5TefM[Tvk;0kYE{k_v#/l(V-tqSMl_J!CU@R:9`mS|}Ob91cJ`}>tdR;/:*ZM');
define('SECURE_AUTH_SALT', '[Q,i_=(WW8ap#V?d0nNk@&na_/2G&%$u(&?SvHJ|-H7P[S*`!fiY6EkO_0MhBw{Q');
define('LOGGED_IN_SALT',   ' C(+QYwMT6uxJn`~!80= Hi|mDt(-:$097d@ Op^67B}=]t6KQ2!%^t@<UUu,vi(');
define('NONCE_SALT',       '|;8Q>dcAa{23`sI:Y//+cL4/A%q%F8rU};J=e6Fl4Kue4-+FmMJup{R|f=&i[C-^');
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