<?php
/**
 * Plugin Name: UC Davis Library Forminator Styles
 * Description: UC Davis theme style customizations for Forminator forms
 * Author: UC Davis Library Online Strategy
 * Version: 1.1.0
 */

require_once( __DIR__ . '/src/UcdlibForminatorStyles.php' );

class UcdlibForminatorStylesImp extends UcdlibForminatorStyles {

  public function __construct(){
    parent::__construct();
    add_action( 'wp_enqueue_scripts', [$this, 'loadStyles'] );
  }


  public function loadStyles(){
    wp_enqueue_style(
      'ucdlib-forminator-styles',
      plugin_dir_url( __FILE__ ) . 'dist/css/ucdlib-forminator-shims-min.css',
      [],
      '1.1.0'
    );
  }

}

new UcdlibForminatorStylesImp();
