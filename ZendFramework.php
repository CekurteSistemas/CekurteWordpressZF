<?php 

namespace Cekurte;

if( !defined('ABSPATH') ) exit;

/*
Plugin Name: 	Cekurte Zend Framework
Plugin URI: 	http://sistemas.cekurte.com/portfolio/wp/cekurte-zf
Description: 	Permite que o Wordpress utilize o Zend Framework 1.12.3.
Version: 		1.0
Author: 		Cekurte Sistemas
Author URI: 	http://sistemas.cekurte.com
*/

if( !class_exists('\\Cekurte\\ZendFramework') ) :

/**
 * Realiza o Autoloader do ZendFramework
 */
class ZendFramework {
    
    /**
     * Adiciona um hook na inicialização do Wordpress
     * 
     * @return void
     */
    public function __construct() {
    	add_action('init', array($this, 'init'), 1);
    }
    
    /**
     * Realiza a inicialização do Plugin
     * 
     * @return void
     */
    public function init() {
    	$this->registerZendFramework();
    }
    
    /**
     * Registra o Zend Framework no include_path e registra com o Zend_Loader_Autoloader
     * 
     * @return void
     */
    public function registerZendFramework() {
    	
    	set_include_path( get_include_path() . PATH_SEPARATOR . dirname(__FILE__) );
    	
    	require_once 'Zend/Loader/Autoloader.php';
    	
		$autoloader = \Zend_Loader_Autoloader::getInstance();
    }
}

$GLOBALS['cekurte-zf'] = new \Cekurte\ZendFramework();

endif;