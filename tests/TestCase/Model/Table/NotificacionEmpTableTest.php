<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotificacionEmpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotificacionEmpTable Test Case
 */
class NotificacionEmpTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotificacionEmpTable
     */
    protected $NotificacionEmp;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.NotificacionEmp',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('NotificacionEmp') ? [] : ['className' => NotificacionEmpTable::class];
        $this->NotificacionEmp = TableRegistry::getTableLocator()->get('NotificacionEmp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->NotificacionEmp);

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
