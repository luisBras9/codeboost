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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NGvoUN65+Oh4Lld0BpcozH+0+Eel9SWZyjHOw/NChCusJrbKHmunSBWz1Zl1wAbCp2i0JrXf61vvrus98bGRgQ==');
define('SECURE_AUTH_KEY',  'GufBwozMsXUJ2O2J2eD3ASblnkPZTelScImt/UHaV6bVoLv7kRd5KVeH8aLbIOjDaEjCUpb3wCWnI32aVKNSUg==');
define('LOGGED_IN_KEY',    '2eZYT/UijcgqWxcUeGTWfrfyaufwQSPcC1cT2p7U6Cf5fH14N2urVBGpdN73kzZQye+6wb9HEs/rrJMm66S+Cg==');
define('NONCE_KEY',        'sBXp5s0bNB33ITtndXL00LqfjdpGZ3j6JEQF20kTx3ERSnfnUoHo/jMqa/NzCgQZwP9Htn5HMNEshbjIorN9zQ==');
define('AUTH_SALT',        '+21HvNkZYQyGvwH6zNlavtc9GLU0FpL0myb1RBAJmg4Mkxd3JGdSHgKHfQqsZ/SYpBIKe5XrfQbqEVLcSMEqaQ==');
define('SECURE_AUTH_SALT', 'vb9ubzdMfsJUnjCYYf1+y1aHLSF/hqTalfXJ54kDwpk+dLMgeSBiHrVhCnPV5iP9qhUdvPi54GQzY68VlV+UVA==');
define('LOGGED_IN_SALT',   'KaJVIMCmoTnFFx5/4WzAOw/thDBxg0P7T1heEon+mfTJmo3UgA33qFJ9UcwHE1N//wokgsO86O5xISCbV+i4HQ==');
define('NONCE_SALT',       'EMgmI5bzW+lRslTn1GqYsV0wBcEMNvwa8Qi7XrEm45XOU8YoOB/ZlB9zfIXbYzp6szVvmS9uAdHr+9oIB3LBBA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
