<?php
	/*
	Plugin Name: Lebedova.Inger Preloader
	Description: Preloader for Lebedova.Inger company
	Author: Richard Markovič
	Author URI: https://lebedova.inger.cz/
	Text Domain: marketing-miner
	Version: 0.1
	*/


	/* Adding Latest jQuery from WordPress */
	function li_preloader_wp_latest_jquery() {
		wp_enqueue_script( 'jquery' );
	}

	add_action( 'init', 'li_preloader_wp_latest_jquery' );

	/* Adding plugin javascript active file */
	function li_preloader_plugin_active() {

		wp_register_script( 'plugin-script-active', plugins_url( 'main.js', __FILE__ ) );
		wp_enqueue_script( 'plugin-script-active' );

	}

	add_action( 'init', 'li_preloader_plugin_active' );

	/* Adding plugin custom CSS file */
	function li_preloader_plugin_styles() {

		wp_register_style( 'plugin-style', plugins_url( 'li-preloader.css', __FILE__ ) );
		wp_enqueue_style( 'plugin-style' );

	}

	add_action( 'wp_enqueue_scripts', 'li_preloader_plugin_styles' );

	/* HTML Content */
	function li_preloader_main_content() {
		?>
		<div id="preloader">
			<div id="loading">

			</div>
		</div>
		<?php
	}

	add_action( 'wp_enqueue_scripts', 'li_preloader_main_content' );
