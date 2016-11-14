<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Doings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="doings form large-9 medium-8 columns content">
    <?= $this->Form->create($doing) ?>
    <fieldset>
        <legend><?= __('Add Doing') ?></legend>
        <?php
            echo $this->Form->input('picture');
            echo $this->Form->input('description');
            echo $this->Form->input('cost');
            echo $this->Form->input('time');
            echo $this->Form->input('date');
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
