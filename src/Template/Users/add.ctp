
<div class="row">
    <?= $this->Form->create($user, ['class'=>'col s12']) ?>

        <legend><h4><?= __('Registro de usuario') ?></h4></legend>
        <br />
        <div class="row">
            <div class="input-field col s4">
                
                 <?= $this->Form->input('name', ['class'=>'validate', 'label'=> 'Nombre *' ,'templates' => [
                                         'inputContainer' => '<div class="input text required"><i class="material-icons prefix">account_circle</i> {{content}} </div>'
    ]                                    ]); ?>
                
            </div>
            <div class="input-field col s4">
                <?= $this->Form->input('last_name_1', ['label'=>'Primer apellido *','templates' => [
                                         'inputContainer' => '<div class="input text"><i class="material-icons prefix">info</i> {{content}} </div>'
    ]                                    ]); ?>
            </div>
            <div class="input-field col s4">
                <?= $this->Form->input('last_name_2', ['label'=>'Segundo apellido','templates' => [
                                         'inputContainer' => '<div class="input text"><i class="material-icons prefix">info</i> {{content}} </div>'
    ]                                    ]); ?>
            </div>
           
        </div>
        
        
        <div class="row">
            <div class="input-field col s6">
                 <?= $this->Form->input('cellphone', ['label'=>'Celular *','templates' => [
                                         'inputContainer' => '<div class="input text"><i class="material-icons prefix">settings_cell</i> {{content}} </div>']]);?>
            </div>
                
            <div class="input-field col s6">
                <?= $this->Form->input('phone', ['label'=>'Teléfono','templates' => [
                                         'inputContainer' => '<div class="input text"><i class="material-icons prefix">phone</i> {{content}} </div>'] ]);?>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <?= $this->Form->input('email', ['label'=>'Correo *','templates' => [
                                         'inputContainer' => '<div class="input text"><i class="material-icons prefix">email</i> {{content}} </div>']]); ?>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <?= $this->Form->input('address', ['label'=>'Dirección *','templates' => [
                                         'inputContainer' => '<div class="input text"><i class="material-icons prefix">my_location</i> {{content}} </div>']]); ?>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <?= $this->Form->input('password', ['label'=>'Contraseña *','templates' => [
                                         'inputContainer' => '<div class="input text"><i class="material-icons prefix">supervisor_account</i> {{content}} </div>']]); ?>
            </div>
        </div>
        
        <?php
            
        
            echo $this->Form->input('x');
            echo $this->Form->input('y');
        ?>
    
      <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
        <i class="material-icons right">send</i>
      </button>
    <?= $this->Form->end() ?>
</div>
