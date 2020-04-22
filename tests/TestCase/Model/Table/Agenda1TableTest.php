<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Agenda1Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Agenda1Table Test Case
 */
class Agenda1TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Agenda1Table
     */
    protected $Agenda1;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Agenda1',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Agenda1') ? [] : ['className' => Agenda1Table::class];
        $this->Agenda1 = TableRegistry::getTableLocator()->get('Agenda1', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Agenda1);

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
