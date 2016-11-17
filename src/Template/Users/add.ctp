<style>
    #map {
        width: 100%;
        height: 400px;
    }
</style>


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
                <?= $this->Form->input('username', ['label'=>'Correo *','templates' => [
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

        <div class="row">
            <div class="input-field col s12">
                <?= $this->Form->input('x',['label'=>'Longitud', 'id'=>'longitud_id','templates' => [
                    'inputContainer' => '<div class="input text"><i class="material-icons prefix" id="long_id">location_on</i> {{content}} </div>']]);?>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <?= $this->Form->input('y', ['label'=>'Latitud', 'id'=>'latitud_id','templates' => [
                    'inputContainer' => '<div class="input text"><i class="material-icons prefix" id="lat_id">location_on</i> {{content}} </div>']]);?>
            </div>
        </div>


    <div id="map"></div>
    <br />
    <br />

      <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
        <i class="material-icons right">send</i>
      </button>
    <?= $this->Form->end() ?>
</div>





<script>

    //var div_latitud = document.getElementById("div_latitud");
    var latitud = 9.937902943165787;//div_latitud.textContent;
    //var div_longitud = document.getElementById("div_longitud");
    var longitud = -84.05199763386003;//div_longitud.textContent;
    var myLatLng; var map; var marker;
    function initMap() {
        myLatLng = {lat: parseFloat(latitud), lng: parseFloat(longitud)};
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: myLatLng
        });
        marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            draggable:true
        });

        marker.addListener('mouseup', function() {
            var lat_id = document.getElementById('lat_id');
            lat_id.className += " active";
            var label_lat = lat_id.nextSibling.nextSibling;
            label_lat.setAttribute("class", "active");
            document.getElementById('latitud_id').value = marker.position.lat();


            var long_id =  document.getElementById('long_id');
            long_id.className += " active";
            var label_long = long_id.nextSibling.nextSibling;
            label_long.setAttribute("class", "active");
            document.getElementById('longitud_id').value = marker.position.lng();

            


        });
    }






</script>

<script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap" async defer></script>