
<div class="doings form large-9 medium-8 columns content">
    <?= $this->Form->create($doing) ?>

        <legend><h4><?= __('Agregar experiencia') ?></h4></legend>
        <?php
            echo $this->Form->input('picture',['label'=>'Imagen del trabajo']);
            echo $this->Form->input('description', ['label'=>'Descripción', 'type'=>'textarea']);
            echo $this->Form->input('cost', ['label'=>'Costo']);
            echo $this->Form->input('time', ['label'=>'Tiempo requerido']);

            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
