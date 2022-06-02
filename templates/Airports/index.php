<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Airport[]|\Cake\Collection\CollectionInterface $airports
 */
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= __('Airports') ?></h1>
        <a href="<?= $this->Url->build(['action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Add Airport</a>
</div>

<div class="airports index content">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= __('Airport Name')?></th>
                    <th><?= __('Country')?></th>
                    <th><?= __('Location') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($airports as $airport): ?>
                <tr>
                     <td><?= h($airport->name) ?></td>
                    <td><?= $airport->has('country') ? $this->Html->link($airport->country->name, ['controller' => 'Countries', 'action' => 'view', $airport->country->id]) : '' ?></td>
                    <td><?= h($airport->location) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $airport->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $airport->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $airport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $airport->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

