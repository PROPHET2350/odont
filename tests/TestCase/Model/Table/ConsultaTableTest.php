<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsultaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsultaTable Test Case
 */
class ConsultaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsultaTable
     */
    protected $Consulta;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Consulta',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Consulta') ? [] : ['className' => ConsultaTable::class];
        $this->Consulta = TableRegistry::getTableLocator()->get('Consulta', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Consulta);

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
