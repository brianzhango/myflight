<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FlightsFixture
 */
class FlightsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'departing_airport_id' => 1,
                'landing_airport_id' => 1,
                'airline_id' => 1,
                'given_airport_id' => 1,
            ],
        ];
        parent::init();
    }
}
