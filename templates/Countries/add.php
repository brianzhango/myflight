<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>

<h1 class="h3 mb-2 text-gray-800">Add New Country</h1>
<?= $this->Form->create($country) ?>
<fieldset>
    <?php
        echo $this->Form->control('name');
        echo $this->Form->control('code');
    ?>
</fieldset>
<br>
<?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>

