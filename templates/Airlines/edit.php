<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Airline $airline
 * @var string[]|\Cake\Collection\CollectionInterface $countries
 */
?>
<h1 class="h3 mb-2 text-gray-800">Edit Airline</h1>

    <?= $this->Form->create($airline) ?>
    <fieldset>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('country_id', ['options' => $countries]);
        ?>
    </fieldset>
    <br>
    <?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
