<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgendaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgendaTable Test Case
 */
class AgendaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AgendaTable
     */
    protected $Agenda;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Agenda',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Agenda') ? [] : ['className' => AgendaTable::class];
        $this->Agenda = TableRegistry::getTableLocator()->get('Agenda', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Agenda);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
