<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Statuses'), ['controller' => 'Statuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['controller' => 'Statuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actives'), ['controller' => 'Actives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Active'), ['controller' => 'Actives', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locks'), ['controller' => 'Locks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lock'), ['controller' => 'Locks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('firstName');
            echo $this->Form->control('lastName');
            echo $this->Form->control('image');
            echo $this->Form->control('facebook');
            echo $this->Form->control('twitter');
            echo $this->Form->control('thumb');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('alphanet');
            echo $this->Form->control('status_id', ['options' => $statuses]);
            echo $this->Form->control('active_id', ['options' => $actives]);
            echo $this->Form->control('tagline');
            echo $this->Form->control('description');
            echo $this->Form->control('lock_id', ['options' => $locks]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
