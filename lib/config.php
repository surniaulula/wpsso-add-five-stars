<?php
/**
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl.txt
 * Copyright 2014-2021 Jean-Sebastien Morisset (https://wpsso.com/)
 */

if ( ! defined( 'ABSPATH' ) ) {

	die( 'These aren\'t the droids you\'re looking for.' );
}

if ( ! class_exists( 'WpssoAfsConfig' ) ) {

	class WpssoAfsConfig {

		public static $cf = array(
			'plugin' => array(
				'wpssoafs' => array(			// Plugin acronym.
					'version'     => '1.0.0',	// Plugin version.
					'opt_version' => '1',		// Increment when changing default option values.
					'short'       => 'WPSSO AFS',	// Short plugin name.
					'name'        => 'WPSSO Add Five Stars',
					'desc'        => 'Add a 5 star rating and review from the site organization to the webpage Schema markup.',
					'slug'        => 'wpsso-add-five-stars',
					'base'        => 'wpsso-add-five-stars/wpsso-add-five-stars.php',
					'update_auth' => 'tid',
					'text_domain' => 'wpsso-add-five-stars',
					'domain_path' => '/languages',

					/**
					 * Required plugin and its version.
					 */
					'req' => array(
						'wpsso' => array(
							'name'          => 'WPSSO Core',
							'home'          => 'https://wordpress.org/plugins/wpsso/',
							'plugin_class'  => 'Wpsso',
							'version_const' => 'WPSSO_VERSION',
							'min_version'   => '9.2.0',
						),
					),

					/**
					 * URLs or relative paths to plugin banners and icons.
					 */
					'assets' => array(

						/**
						 * Icon image array keys are '1x' and '2x'.
						 */
						'icons' => array(
							'1x' => 'images/icon-128x128.png',
							'2x' => 'images/icon-256x256.png',
						),
					),
				),
			),
		);

		public static function get_version( $add_slug = false ) {

			$info =& self::$cf[ 'plugin' ][ 'wpssoafs' ];

			return $add_slug ? $info[ 'slug' ] . '-' . $info[ 'version' ] : $info[ 'version' ];
		}

		public static function set_constants( $plugin_file ) {

			if ( defined( 'WPSSOAFS_VERSION' ) ) {	// Define constants only once.

				return;
			}

			$info =& self::$cf[ 'plugin' ][ 'wpssoafs' ];

			/**
			 * Define fixed constants.
			 */
			define( 'WPSSOAFS_FILEPATH', $plugin_file );
			define( 'WPSSOAFS_PLUGINBASE', $info[ 'base' ] );	// Example: wpsso-add-five-stars/wpsso-add-five-stars.php.
			define( 'WPSSOAFS_PLUGINDIR', trailingslashit( realpath( dirname( $plugin_file ) ) ) );
			define( 'WPSSOAFS_PLUGINSLUG', $info[ 'slug' ] );	// Example: wpsso-add-five-stars.
			define( 'WPSSOAFS_URLPATH', trailingslashit( plugins_url( '', $plugin_file ) ) );
			define( 'WPSSOAFS_VERSION', $info[ 'version' ] );

			/**
			 * Define variable constants.
			 */
			self::set_variable_constants();
		}

		public static function set_variable_constants( $var_const = null ) {

			if ( ! is_array( $var_const ) ) {

				$var_const = (array) self::get_variable_constants();
			}

			/**
			 * Define the variable constants, if not already defined.
			 */
			foreach ( $var_const as $name => $value ) {

				if ( ! defined( $name ) ) {

					define( $name, $value );
				}
			}
		}

		public static function get_variable_constants() {

			$var_const = array();

			$var_const[ 'WPSSOAFS_SCHEMA_SHORTCODE_NAME' ]      = 'schema';
			$var_const[ 'WPSSOAFS_SCHEMA_SHORTCODE_SEPARATOR' ] = '_';
			$var_const[ 'WPSSOAFS_SCHEMA_SHORTCODE_DEPTH' ]     = 3;

			/**
			 * Maybe override the default constant value with a pre-defined constant value.
			 */
			foreach ( $var_const as $name => $value ) {

				if ( defined( $name ) ) {

					$var_const[$name] = constant( $name );
				}
			}

			return $var_const;
		}

		public static function require_libs( $plugin_file ) {

			require_once WPSSOAFS_PLUGINDIR . 'lib/filters.php';
			require_once WPSSOAFS_PLUGINDIR . 'lib/register.php';

			add_filter( 'wpssoafs_load_lib', array( 'WpssoAfsConfig', 'load_lib' ), 10, 3 );
		}

		public static function load_lib( $success = false, $filespec = '', $classname = '' ) {

			if ( false === $success && ! empty( $filespec ) ) {

				$file_path = WPSSOAFS_PLUGINDIR . 'lib/' . $filespec . '.php';

				if ( file_exists( $file_path ) ) {

					require_once $file_path;

					if ( empty( $classname ) ) {

						$classname = SucomUtil::sanitize_classname( 'wpssoafs' . $filespec, $allow_underscore = false );
					}

					return $classname;
				}
			}

			return $success;
		}
	}
}
