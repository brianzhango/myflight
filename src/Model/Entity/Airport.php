<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Airport Entity
 *
 * @property int $id
 * @property int $country_id
 * @property string $latitude
 * @property string $longitude
 * @property string $name
 *
 * @property \App\Model\Entity\Country $country
 */
class Airport extends Entity
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
        'country_id' => true,
        'latitude' => true,
        'longitude' => true,
        'name' => true,
        'country' => true,
    ];

     protected function _getLocation()
    {
        return $location = $this->latitude. ',' . $this->longitude;
    }


}
