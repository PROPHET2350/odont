<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoUsuarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoUsuarioTable Test Case
 */
class TipoUsuarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoUsuarioTable
     */
    protected $TipoUsuario;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TipoUsuario',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TipoUsuario') ? [] : ['className' => TipoUsuarioTable::class];
        $this->TipoUsuario = TableRegistry::getTableLocator()->get('TipoUsuario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TipoUsuario);

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
