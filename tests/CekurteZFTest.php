<?php

/**
 * Cekurte_ZF Tests
 */
class Cekurte_ZF_Test extends WP_UnitTestCase {
    
	/**
     * @var Cekurte_ZF uma instância do plugin
     */
    private $plugin	= null;

    public function setUp() {
        parent::setUp();
        $this->plugin = new Cekurte_ZF();
        $this->plugin->init();
    }
    
    /**
     * Verifica se o plugin é uma instância de Cekurte_ZF
     */
    public function testIsInstanceOfCekurteDelivery() {
    	$this->assertInstanceOf('Cekurte_ZF', $this->plugin);
    }
    
	/**
     * Verifica se o Zend Framework foi inicializado
     */
    public function testInstanceOfZendFramework() {
    	$this->assertInstanceOf('Zend_Date', new Zend_Date());
    }
}