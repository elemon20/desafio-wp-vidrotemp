<?php 


	//REGISTRO DE ESTILOS

	function register_enqueue_style() {
		$theme_data = wp_get_theme();

		/*Registrando estilos*/
		wp_register_style('animate', get_parent_theme_file_uri('/assets/vendor/css/animate.css'), null, 1.0, 'screen');
		wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/vendor/css/bootstrap.css'), null, 1.0,'screen');
		wp_register_style('flexslider', get_parent_theme_file_uri('/assets/vendor/css/flexslider.css'), null, 2.6, 'screen');
		wp_register_style('icomoon', get_parent_theme_file_uri('/assets/vendor/css/icomoon.css'), null, 1.0, 'screen');
		wp_register_style('owl.carousel', get_parent_theme_file_uri('/assets/vendor/css/owl.carousel.min.css'), null, 1.0, 'screen');
		wp_register_style('owl.theme', get_parent_theme_file_uri('/assets/vendor/css/owl.theme.default.min.css'), null, 1.0, 'screen');
		wp_register_style('themify', get_parent_theme_file_uri('/assets/vendor/css/themify-icons.css'), null, 1.0, 'screen');
		wp_register_style('main', get_parent_theme_file_uri('/assets/css/style.css'), null, 1.0, 'screen');

			/*Enqueue estilos*/
			wp_enqueue_style( 'animate' );
			wp_enqueue_style( 'bootstrap' );
			wp_enqueue_style( 'flexslider' );
			wp_enqueue_style( 'icomoon' );
			wp_enqueue_style( 'owl.carousel' );
			wp_enqueue_style( 'owl.theme' );
			wp_enqueue_style( 'themify' );
			wp_enqueue_style( 'main' );
	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );


	//REGISTRO DE SCRIPTS

	function register_enqueue_scripts() {
		$theme_data = wp_get_theme();


	/*Deregister Scripts*/
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );

	/*Registrando Scripts*/
	wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/vendor/js/jquery.min.js'), null, '1.0.0', true);
	wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jQuery3'), null, true);
	wp_register_script('easingjQuery', get_parent_theme_file_uri('/assets/vendor/js/jquery.easing.1.3.js'), array('jQuery3'), null, true);
	wp_register_script('waypointsjQuery', get_parent_theme_file_uri('/assets/vendor/js/jquery.waypoints.min.js'), array('jQuery3'), null, true);
	wp_register_script('google_map', get_parent_theme_file_uri('/assets/vendor/js/google_map.js'), array('jQuery3'), null, true);
	wp_register_script('modernizr', get_parent_theme_file_uri('/assets/vendor/js/modernizr-2.6.2'), array('jQuery3'), null, true);
	wp_register_script('owl.carouselJS', get_parent_theme_file_uri('/assets/vendor/js/owl.carousel.min.js'), array('jQuery3'), null, true);
	wp_register_script('respond', get_parent_theme_file_uri('/assets/vendor/js/respond.min.js'), array('jQuery3'), null, true);
	wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/main.js'), array('jQuery3'), null, true);

		/*Enqueue Scripts*/
		wp_enqueue_script( 'jQuery3' );
		wp_enqueue_script( 'bootstrap' );
		wp_enqueue_script( 'easingjQuery' );
		wp_enqueue_script( 'waypointsjQuery' );
		wp_enqueue_script( 'google_map' );
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'owl.carouselJS' );
		wp_enqueue_script( 'respond' );
		wp_enqueue_script( 'mainJS' );

	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );


	//dasactiva bufer de salida
	remove_action ('shutdown', 'wp_ob_end_flush_all', 1);

	//registrando Menu

	function menus_setup() {
		register_nav_menus(
			array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' ),
			)
		);
	}
	add_action( 'after_setup_theme', 'menus_setup' );


	// activar opción de logo en el tema
	function config_custom_logo() {
    	add_theme_support( 'custom-logo', array(
	      'height'      => 100,
	      'width'       => 400,
	      'flex-height' => true,
	      'flex-width'  => true,
	      'header-text' => array( 'site-title', 'site-description' ),
   		));
  	}

  	add_action( 'after_setup_theme', 'config_custom_logo' );

?>