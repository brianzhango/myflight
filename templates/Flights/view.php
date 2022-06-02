<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight $flight
 */
?>

<h1 class="h3 mb-2 text-gray-800"><?= h($flight->name) ?></h1>
    <div>
        <div class="flights view content">
            <h3><?= h($flight->id) ?></h3>
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <tr>
                    <th><?= __('Flight Num') ?></th>
                    <td><?= h($flight->flight_num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Airline') ?></th>
                    <td><?= $flight->has('airline') ? $this->Html->link($flight->airline->name, ['controller' => 'Airlines', 'action' => 'view', $flight->airline->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Departing Airport') ?></th>
                    <td><?= $flight->has('departing_airport') ? $this->Html->link($flight->departing_airport->name, ['controller' => 'Airports', 'action' => 'view', $flight->departing_airport->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Landing Airport') ?></th>
                    <td><?= $flight->has('landing_airport') ? $this->Html->link($flight->landing_airport->name, ['controller' => 'Airports', 'action' => 'view', $flight->landing_airport->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Given Airport') ?></th>
                    <td><?= $flight->has('given_airport') ? $this->Html->link($flight->given_airport->name, ['controller' => 'Airports', 'action' => 'view', $flight->given_airport->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
