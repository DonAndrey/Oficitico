<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Doing'), ['action' => 'edit', $doing->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Doing'), ['action' => 'delete', $doing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doing->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Doings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doing'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="doings view large-9 medium-8 columns content">
    <h3><?= h($doing->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Picture') ?></th>
            <td><?= h($doing->picture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($doing->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($doing->time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $doing->has('user') ? $this->Html->link($doing->user->name, ['controller' => 'Users', 'action' => 'view', $doing->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($doing->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($doing->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($doing->date) ?></td>
        </tr>
    </table>
</div>
