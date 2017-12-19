<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocksTable Test Case
 */
class LocksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LocksTable
     */
    public $Locks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.locks',
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
        $config = TableRegistry::exists('Locks') ? [] : ['className' => LocksTable::class];
        $this->Locks = TableRegistry::get('Locks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Locks);

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
}
