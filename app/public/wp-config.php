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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '5BbTTiGECAfmT9XjXGiAWXNVqOw3M45PpVxV01EGUvF581MZxp9x8AMx6fxmneqkFkSE+kA/GiKGH2qKtD8VxQ==');
define('SECURE_AUTH_KEY',  'pVd8SyifBdeXHLig+ufwxVJjC8Ggvtlk76ZMveNvTch8Vn8lU/pU3ioz715mp3NeqmkU0OiAuVIaMdTJP898cQ==');
define('LOGGED_IN_KEY',    '6shyCy1CnQp2bC57VkvJGippRVku+f9QxBB2xHofl8G67kCugdW0GgU2/qFJTjb88SeekDT+mOjBFIayAqwROg==');
define('NONCE_KEY',        'yiIf6eesrvHq6F6K2VEsO/+1/ekLDXFutiy/2KG9/nwuaitT9RXp/yiNLcwWoXwuAeTRifO+TDJ/UpGv+VQvOA==');
define('AUTH_SALT',        'Bf1NsystS1p53PM9oSvxT1RSnjs4aXFpxXK1DLSc1et9TZedVRV9x402XdRjr7rHNuHgB4+xUjsSprqr/Ba9xw==');
define('SECURE_AUTH_SALT', '6GF1wrLbO2NRq7zAXkCzXLZQqXJsYclPQ7E6NowGN0yYyKvGDkltSPALO4f0RhY38dcqX/Zf1hSbYbaHUm1MKg==');
define('LOGGED_IN_SALT',   'KKCVgqmvputXP8aUdtZ4YtBilIUEaxAZCevT26BcuZy30NRIayh2nIenbkEPRoFCsSpr/YZHPK9fhTRl4tfWEw==');
define('NONCE_SALT',       'mD51hpC+T0XhAvIfsbN30nYaErRQjgSqSk5B1khgsESSxxjXHp1Plqla7QzBCAHmTwOAXYmChev/qmTjCSmTRg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
