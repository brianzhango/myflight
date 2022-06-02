<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Airline $airline
 */
?>
<h1 class="h3 mb-2 text-gray-800"><?= h($airline->name) ?></h1>
    <div>
        <div class="airlines view content">
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($airline->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $airline->has('country') ? $this->Html->link($airline->country->name, ['controller' => 'Countries', 'action' => 'view', $airline->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($airline->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Flights') ?></h4>
                <?php if (!empty($airline->flights)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" cellspacing="0">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Departing Airport') ?></th>
                            <th><?= __('Landing Airport') ?></th>
                            <th><?= __('Airline') ?></th>
                            <th><?= __('Given Airport') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($airline->flights as $flights) : ?>
                        <tr>
                            <td><?= h($flights->id) ?></td>
                            <td><?= h($flights->departing_airport_id) ?></td>
                            <td><?= h($flights->landing_airport_id) ?></td>
                            <td><?= h($flights->airline_id) ?></td>
                            <td><?= h($flights->given_airport_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Flights', 'action' => 'view', $flights->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Flights', 'action' => 'edit', $flights->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flights', 'action' => 'delete', $flights->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flights->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
