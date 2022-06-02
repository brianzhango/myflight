<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight[]|\Cake\Collection\CollectionInterface $flights
 */
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= __('Flights') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Add Flight</a>
</div>

<div class="flights index content">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
            <thead>
                <tr>
                    <th><?= __('Flight Number') ?></th>
                    <th><?= __('Departing Airport') ?></th>
                    <th><?= __('Landing Airport') ?></th>
                    <th><?= __('Given Airport') ?></th>
                    <th><?= __('Airline') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flights as $flight): ?>
                <tr>
                    <td><?= h($flight->flight_num) ?></td>
                    <td><?= $flight->has('airport') ? $this->Html->link($flight->airport->name, ['controller' => 'Airports', 'action' => 'view', $flight->airport->id]) : '' ?></td>
                    <td><?= $flight->has('airport') ? $this->Html->link($flight->airport->name, ['controller' => 'Airports', 'action' => 'view', $flight->airport->id]) : '' ?></td>
                    <td><?= $flight->has('airport') ? $this->Html->link($flight->airport->name, ['controller' => 'Airports', 'action' => 'view', $flight->airport->id]) : '' ?></td>
                    <td><?= $flight->has('airline') ? $this->Html->link($flight->airline->name, ['controller' => 'Airlines', 'action' => 'view', $flight->airline->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $flight->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flight->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
