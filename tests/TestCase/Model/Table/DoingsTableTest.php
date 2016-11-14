<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoingsTable Test Case
 */
class DoingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DoingsTable
     */
    public $Doings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.doings',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Doings') ? [] : ['className' => 'App\Model\Table\DoingsTable'];
        $this->Doings = TableRegistry::get('Doings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Doings);

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
