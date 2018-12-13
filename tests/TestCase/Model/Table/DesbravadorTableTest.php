<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DesbravadorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DesbravadorTable Test Case
 */
class DesbravadorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DesbravadorTable
     */
    public $Desbravador;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Desbravador'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Desbravador') ? [] : ['className' => DesbravadorTable::class];
        $this->Desbravador = TableRegistry::getTableLocator()->get('Desbravador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Desbravador);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
