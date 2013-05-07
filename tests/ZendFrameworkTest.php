<?php

require_once realpath(dirname(__FILE__) . '/../ZendFramework.php');

/**
 * \Cekurte\ZendFramework Tests
 */
class ZendFrameworkTest extends WP_UnitTestCase {
    
	/**
     * @var \Cekurte\ZendFramework uma instância do plugin
     */
    private $plugin	= null;

    public function setUp() {
        parent::setUp();
        $this->plugin = $GLOBALS['cekurte-zf'];
        $this->plugin->init();
    }
    
    /**
     * Verifica se o plugin é uma instância de \Cekurte\ZendFramework
     */
    public function testIsInstanceOfCekurteZendFramework() {
    	$this->assertInstanceOf('\\Cekurte\\ZendFramework', $this->plugin);
    }
    
	/**
     * Verifica se o Zend Framework foi inicializado
     */
    public function testInstanceOfZendFramework() {
    	$this->assertInstanceOf('Zend_Date', new Zend_Date());
    }
}