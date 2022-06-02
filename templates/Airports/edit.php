<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Airport $airport
 * @var string[]|\Cake\Collection\CollectionInterface $countries
 */
?>

<h1 class="h3 mb-2 text-gray-800">Edit Airport</h1>
<?= $this->Form->create($airport) ?>
    <?php
            echo $this->Form->control('name');
            echo $this->Form->control('country_id', ['options' => $countries]);
            echo $this->Form->control('latitude',['readonly'=>true]);
            echo $this->Form->control('longitude',['readonly'=>true]); ?>
    <div> 
        <br>
            <?php 
                $options = [
                    'zoom' => 10,
                    'type' => 'R',
                    'geolocate' => true,
                    'div' => ['id' => 'mymap'],
                    'map' => [
                        'navOptions' => ['style' => 'SMALL'], 
                        'typeOptions' => ['style' => 'HORIZONTAL_BAR', 'pos' => 'LEFT_TOP']
                    ],
                    'lat' => $airport->latitude,
                    'lng' => $airport->longitude,
                ];
                $map = $this->GoogleMap->map($options);
                $this->GoogleMap->addMarker(['lat' => $airport->latitude, 'lng' => $airport->longitude, 'title' => 'marker1', 'icon' => $this->GoogleMap->iconSet('green', 'C')]);
            ?>
            <?php $mapclick = <<< EOF
                map0.addListener("click", (mapsMouseEvent) => {
                    console.log(mapsMouseEvent.latLng.toJSON());
                    document.getElementsByName('latitude')[0].value = mapsMouseEvent.latLng.toJSON().lat;
                    document.getElementsByName('longitude')[0].value = mapsMouseEvent.latLng.toJSON().lng;
                    placeMarker(mapsMouseEvent.latLng);
                });

                var marker;

                function placeMarker(location) {
                    if (marker == null) {
                    marker = new google.maps.Marker({
                    position: location,
                    map: map0
                        });
                    } else {
                        marker.setPosition(location);
                    }
                }

                EOF ?>
            <?php echo $this->GoogleMap->addCustom($mapclick);
            
            echo $this->GoogleMap->script();
            echo $map;?>
        </div>
        <br>
   <?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>