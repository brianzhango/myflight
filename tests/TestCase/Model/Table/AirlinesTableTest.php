<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AirlinesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AirlinesTable Test Case
 */
class AirlinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AirlinesTable
     */
    protected $Airlines;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Airlines',
        'app.Countries',
        'app.Flights',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Airlines') ? [] : ['className' => AirlinesTable::class];
        $this->Airlines = $this->getTableLocator()->get('Airlines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Airlines);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AirlinesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AirlinesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
