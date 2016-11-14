<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Activities'), ['controller' => 'Activities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Activity'), ['controller' => 'Activities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Doings'), ['controller' => 'Doings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doing'), ['controller' => 'Doings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name 1') ?></th>
            <td><?= h($user->last_name_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name 2') ?></th>
            <td><?= h($user->last_name_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cellphone') ?></th>
            <td><?= h($user->cellphone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Picture') ?></th>
            <td><?= h($user->picture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('X') ?></th>
            <td><?= $this->Number->format($user->x) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Y') ?></th>
            <td><?= $this->Number->format($user->y) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $this->Number->format($user->state) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Activities') ?></h4>
        <?php if (!empty($user->activities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->activities as $activities): ?>
            <tr>
                <td><?= h($activities->id) ?></td>
                <td><?= h($activities->name) ?></td>
                <td><?= h($activities->description) ?></td>
                <td><?= h($activities->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Activities', 'action' => 'view', $activities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Activities', 'action' => 'edit', $activities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Activities', 'action' => 'delete', $activities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Doings') ?></h4>
        <?php if (!empty($user->doings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Picture') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Cost') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->doings as $doings): ?>
            <tr>
                <td><?= h($doings->id) ?></td>
                <td><?= h($doings->picture) ?></td>
                <td><?= h($doings->description) ?></td>
                <td><?= h($doings->cost) ?></td>
                <td><?= h($doings->time) ?></td>
                <td><?= h($doings->date) ?></td>
                <td><?= h($doings->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Doings', 'action' => 'view', $doings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Doings', 'action' => 'edit', $doings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Doings', 'action' => 'delete', $doings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
