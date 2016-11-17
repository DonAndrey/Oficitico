
<div class="row">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create(null, ['class'=>'col s12']) ?>

        <legend><h4><?= __('Ingrese') ?></h4></legend>
        <br />
        <div class="row">
            <div class="input-field col s12">
                
                 <?= $this->Form->input('email', ['class'=>'validate', 'label'=> 'Correo' ,'templates' => [
                                         'inputContainer' => '<div class="input text required"><i class="material-icons prefix">account_circle</i> {{content}} </div>'
    ]                                    ]); ?>
                
            </div>
           
        </div>
        
        

        
        <div class="row">
            <div class="input-field col s12">
                <?= $this->Form->input('password', ['label'=>'Contraseña','templates' => [
                                         'inputContainer' => '<div class="input text"><i class="material-icons prefix">supervisor_account</i> {{content}} </div>']]); ?>
            </div>
        </div>

    
      <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
      </button>
    <?= $this->Form->end() ?>
</div>