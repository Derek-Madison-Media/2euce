<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Active $active
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Active'), ['action' => 'edit', $active->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Active'), ['action' => 'delete', $active->id], ['confirm' => __('Are you sure you want to delete # {0}?', $active->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actives'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Active'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actives view large-9 medium-8 columns content">
    <h3><?= h($active->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($active->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($active->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($active->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($active->updated) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($active->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('FirstName') ?></th>
                <th scope="col"><?= __('LastName') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Facebook') ?></th>
                <th scope="col"><?= __('Twitter') ?></th>
                <th scope="col"><?= __('Thumb') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Alphanet') ?></th>
                <th scope="col"><?= __('Status Id') ?></th>
                <th scope="col"><?= __('Active Id') ?></th>
                <th scope="col"><?= __('Tagline') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Lock Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($active->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->firstName) ?></td>
                <td><?= h($users->lastName) ?></td>
                <td><?= h($users->image) ?></td>
                <td><?= h($users->facebook) ?></td>
                <td><?= h($users->twitter) ?></td>
                <td><?= h($users->thumb) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->alphanet) ?></td>
                <td><?= h($users->status_id) ?></td>
                <td><?= h($users->active_id) ?></td>
                <td><?= h($users->tagline) ?></td>
                <td><?= h($users->description) ?></td>
                <td><?= h($users->lock_id) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
