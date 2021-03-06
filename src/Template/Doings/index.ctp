<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Doing'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="doings index large-9 medium-8 columns content">
    <h3><?= __('Doings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('picture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($doings as $doing): ?>
            <tr>
                <td><?= $this->Number->format($doing->id) ?></td>
                <td><?= h($doing->picture) ?></td>
                <td><?= h($doing->description) ?></td>
                <td><?= $this->Number->format($doing->cost) ?></td>
                <td><?= h($doing->time) ?></td>
                <td><?= h($doing->date) ?></td>
                <td><?= $doing->has('user') ? $this->Html->link($doing->user->name, ['controller' => 'Users', 'action' => 'view', $doing->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $doing->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doing->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doing->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
