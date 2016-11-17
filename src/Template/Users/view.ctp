
<div class="users view large-9 medium-8 columns content">
    <h3><?= $user->name." ".$user->last_name_1." ".$user->last_name_2 ?></h3>
    <table class="striped">
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>


        <tr>
            <th scope="row"><?= __('Dirección') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teléfono') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($user->cellphone) ?></td>
        </tr>


    </table>

    <br />
    <br />
    <div class="row">
        <div class="col s6">
            <?= $this->Html->link('Agregar experiencia', ['controller'=>'doings', 'action'=>'add'],['id'=>"download-button", 'class'=>"btn-large waves-effect waves-light teal lighten-1"]);?>
        </div>
        <div class="col s6">
            <?= $this->Html->link('Agregar servicios', ['controller'=>'activities', 'action'=>'add'],['id'=>"download-button", 'class'=>"btn-large waves-effect waves-light teal lighten-1"]);?>
        </div>
    </div>