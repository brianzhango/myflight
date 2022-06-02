<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flight Entity
 *
 * @property int $id
 * @property int $departing_airport_id
 * @property int $landing_airport_id
 * @property int $airline_id
 * @property int $given_airport_id
 * @property string $flight_num
 *
 * @property \App\Model\Entity\Airport $airport
 * @property \App\Model\Entity\Airline $airline
 */
class Flight extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'departing_airport_id' => true,
        'landing_airport_id' => true,
        'airline_id' => true,
        'given_airport_id' => true,
        'airport' => true,
        'airline' => true,
        'flight_num' => true,
    ];
}
