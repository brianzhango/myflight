<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Airport $airport
 */
?>
<h1 class="h3 mb-2 text-gray-800"><?= h($airport->name) ?></h1>
    <div>
        <div class="airports view content">
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($airport->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($airport->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $airport->has('country') ? $this->Html->link($airport->country->name, ['controller' => 'Countries', 'action' => 'view', $airport->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Latitude') ?></th>
                    <td><?= h($airport->latitude) ?></td>
                </tr>
                <tr>
                    <th><?= __('Longitude') ?></th>
                    <td><?= h($airport->longitude) ?></td>
                </tr>
            </table>
            <div> 
                <?php 
            
                $options = [
                        'zoom' => 10,
                        'type' => 'R',
                        'geolocate' => true,
                        'div' => ['id' => 'someothers'],
                        'map' => [
                            'navOptions' => ['style' => 'SMALL'], 
                            'typeOptions' => ['style' => 'HORIZONTAL_BAR', 'pos' => 'RIGHT_CENTER']
                        ],
                        'lat' => "-37.8136",
                        'lng' => "144.9631",
                    ];
                    echo $this->GoogleMap->map($options);
                    $this->GoogleMap->addMarker(['lat' => h($airport->latitude), 'lng' => h($airport->longitude), 'title' => 'Marker1']);
                    
                ?>
                <?php
                echo $this->GoogleMap->script();?>
            </div>
        </div>
    </div>
