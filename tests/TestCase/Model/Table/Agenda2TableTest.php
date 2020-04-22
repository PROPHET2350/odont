<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Agenda2Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Agenda2Table Test Case
 */
class Agenda2TableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\Agenda2Table
     */
    protected $Agenda2;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Agenda2',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Agenda2') ? [] : ['className' => Agenda2Table::class];
        $this->Agenda2 = TableRegistry::getTableLocator()->get('Agenda2', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Agenda2);

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
