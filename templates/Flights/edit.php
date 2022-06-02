<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight $flight
 * @var string[]|\Cake\Collection\CollectionInterface $airports
 * @var string[]|\Cake\Collection\CollectionInterface $airlines
 */
?>
<h1 class="h3 mb-2 text-gray-800">Edit Flight</h1>
    <?= $this->Form->create($flight) ?>
    <fieldset>
        <?php
            echo $this->Form->control('flight_num');
            echo $this->Form->control('departing_airport_id', ['options' => $airports]);
            echo $this->Form->control('landing_airport_id', ['options' => $airports]);
            echo $this->Form->control('airline_id', ['options' => $airlines]);
            echo $this->Form->control('given_airport_id', ['options' => $airports]);
        ?>
    </fieldset>
    <br>
    <?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
