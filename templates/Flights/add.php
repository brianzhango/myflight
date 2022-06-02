<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight $flight
 * @var \Cake\Collection\CollectionInterface|string[] $airports
 * @var \Cake\Collection\CollectionInterface|string[] $airlines
 */
?>

<h1 class="h3 mb-2 text-gray-800">Add New Flight</h1>
<?= $this->Form->create($flight) ?>
<fieldset>
    <?php
        echo $this->Form->control('flight_num');
        echo $this->Form->control('departing_airport_id', ['options' => $airports]);
        echo $this->Form->control('landing_airport_id', ['options' => $airports]);
        echo $this->Form->control('given_airport_id', ['options' => $airports]);
        echo $this->Form->control('airline_id', ['options' => $airlines]);
    ?>
</fieldset>
<br>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>

