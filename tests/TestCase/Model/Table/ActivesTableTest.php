<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivesTable Test Case
 */
class ActivesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivesTable
     */
    public $Actives;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actives',
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
        $config = TableRegistry::exists('Actives') ? [] : ['className' => ActivesTable::class];
        $this->Actives = TableRegistry::get('Actives', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Actives);

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
