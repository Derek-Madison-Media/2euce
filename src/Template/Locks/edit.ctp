<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lock $lock
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lock->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lock->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Locks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="locks form large-9 medium-8 columns content">
    <?= $this->Form->create($lock) ?>
    <fieldset>
        <legend><?= __('Edit Lock') ?></legend>
        <?php
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
