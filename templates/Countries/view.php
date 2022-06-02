<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<h1 class="h3 mb-2 text-gray-800"><?= h($country->name) ?></h1>
    <div>
        <div class="countries view content">
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($country->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($country->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($country->code) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Airlines') ?></h4>
                <?php if (!empty($country->airlines)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" cellspacing="0">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($country->airlines as $airlines) : ?>
                        <tr>
                            <td><?= h($airlines->id) ?></td>
                            <td><?= h($airlines->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Airlines', 'action' => 'view', $airlines->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Airlines', 'action' => 'edit', $airlines->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Airlines', 'action' => 'delete', $airlines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $airlines->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Airports') ?></h4>
                <?php if (!empty($country->airports)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" cellspacing="0">
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Latitude') ?></th>
                            <th><?= __('Longitude') ?></th>
                            <th><?= __('Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($country->airports as $airports) : ?>
                        <tr>
                            <td><?= h($airports->id) ?></td>
                            <td><?= h($airports->latitude) ?></td>
                            <td><?= h($airports->longitude) ?></td>
                            <td><?= h($airports->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Airports', 'action' => 'view', $airports->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Airports', 'action' => 'edit', $airports->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Airports', 'action' => 'delete', $airports->id], ['confirm' => __('Are you sure you want to delete # {0}?', $airports->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
