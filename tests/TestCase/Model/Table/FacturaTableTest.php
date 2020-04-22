<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FacturaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FacturaTable Test Case
 */
class FacturaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FacturaTable
     */
    protected $Factura;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Factura',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Factura') ? [] : ['className' => FacturaTable::class];
        $this->Factura = TableRegistry::getTableLocator()->get('Factura', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Factura);

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
