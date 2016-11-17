
<div class="activities form large-9 medium-8 columns content">
    <?= $this->Form->create($activity) ?>

        <legend><h4><?= __('Agregar una actividad') ?></h4></legend>
        <?php
            echo $this->Form->input('name',['label'=>'Nombre del servicio']);
            echo $this->Form->input('description', ['label'=>'Descripción']);
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
