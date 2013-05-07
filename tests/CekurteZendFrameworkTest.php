<?php

require_once realpath(dirname(__FILE__) . '/../CekurteZendFramework.php');

/**
 * CekurteZendFramework Tests
 */
class CekurteZendFrameworkTest extends WP_UnitTestCase {
    
	/**
     * @var CekurteZendFramework uma instância do plugin
     */
    private $plugin	= null;

    public function setUp() {
        parent::setUp();
        $this->plugin = $GLOBALS['cekurte-zf'];
        $this->plugin->init();
    }
    
    /**
     * Verifica se o plugin é uma instância de CekurteZendFramework
     */
    public function testIsInstanceOfCekurteDelivery() {
    	$this->assertInstanceOf('CekurteZendFramework', $this->plugin);
    }
    
	/**
     * Verifica se o Zend Framework foi inicializado
     */
    public function testInstanceOfZendFramework() {
    	$this->assertInstanceOf('Zend_Date', new Zend_Date());
    }
}