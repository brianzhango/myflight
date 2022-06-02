<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Airline[]|\Cake\Collection\CollectionInterface $airlines
 */
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= __('Airlines') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Add Airline</a>
</div>

<div class="airlines index content">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= __('Airline Name') ?></th>
                    <th><?= __('Country') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($airlines as $airline): ?>
                <tr>
                    <td><?= h($airline->name) ?></td>
                    <td><?= $airline->has('country') ? $this->Html->link($airline->country->name, ['controller' => 'Countries', 'action' => 'view', $airline->country->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $airline->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $airline->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $airline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $airline->name)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
