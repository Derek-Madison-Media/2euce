<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Active $active
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $active->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $active->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Actives'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actives form large-9 medium-8 columns content">
    <?= $this->Form->create($active) ?>
    <fieldset>
        <legend><?= __('Edit Active') ?></legend>
        <?php
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
