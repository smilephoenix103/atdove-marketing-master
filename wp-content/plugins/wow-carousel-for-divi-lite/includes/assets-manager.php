<?php
namespace WowDiviCarouselLite;

defined( 'ABSPATH' ) || die();

class AssetsManager {

	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	public function enqueue_scripts() {

		wp_enqueue_style(
			'wdcl-core',
			WDCL_PLUGIN_ASSETS . 'css/core.min.css',
			null,
			WDCL_PLUGIN_VERSION
		);

		wp_enqueue_style(
			'wdcl-slick',
			WDCL_PLUGIN_ASSETS . 'css/slick.min.css',
			null,
			WDCL_PLUGIN_VERSION
		);

		wp_enqueue_script(
			'wdcl-slick',
			WDCL_PLUGIN_ASSETS . 'js/slick.min.js',
			array( 'jquery' ),
			WDCL_PLUGIN_VERSION,
			true
		);

	}

}

new AssetsManager();
