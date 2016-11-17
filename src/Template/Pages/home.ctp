<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'Oficitico: Home';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?php echo $this->Html->meta('favicon.ico','webroot/favicon.ico',['type' => 'icon']);?>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?= $this->Html->css('materialize.css', ['media'=>"screen,projection"]) ?>
    <?= $this->Html->css('style.css', ['media'=>"screen,projection"]) ?>
    <?= $this->Html->css('home.css', ['media'=>"screen,projection"]) ?>
     
   

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="home">





  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><?= $this->Html->image('home/logo.png', ['alt' => 'Logo']);?></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/users/login">INGRESE</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Oficitico</h1>
        <div class="row center">
          <h5 class="header col s12 light">Anunciar tus servicios nunca antes fue tan fácil</h5>
        </div>
        <div class="row center">
          <?= $this->Html->link('Registro', 'users/add', ['id'=>"download-button", 'class'=>"btn-large waves-effect waves-light teal lighten-1"]);?>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><?= $this->Html->image('home/background1.jpg', ['alt' => 'Unsplashed background img 1']);?></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">Anuncie</i></h2>
            <h5 class="center">Anuncie los servicios que ofrece</h5>

            <p class="light">Con Oficitico podés anunciar cualquier servicio que brindes como parte de tu oficio, con tan solo <a href="/users/add">registrarte</a>.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">Contrate</i></h2>
            <h5 class="center">Contrate a la persona más idonea</h5>

            <p class="light">Oficitico es una plataforma que está diseñada para que los clientes puedan calificar el servicio que le brindó el oferente, de esta manera los clientes futuros podrán escoger a la persona más idonea de acuerdo a esas calificaciones.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">Comente</i></h2>
            <h5 class="center">Comente su experiencia</h5>

            <p class="light">Una de las principales características de Oficitico es la potestad que tienen tanto los clientes como los oferentes de comentar y calificar acerca del servicio recibido por parte del oferente, o del trato recibido por parte del cliente. Esto contribuye con la mejora continua de ambas partes.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Encontrar a esa persona que buscabas para realizar una tarea específica, con tan solo un clic</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><?= $this->Html->image('home/background2.jpg', ['alt' => 'Unsplashed background img 2']);?></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Acerca de nosotros</h4>
          <p class="left-align light">Oficitico es un proyecto social que pretende ayudar principalmente a aquellas personas cuya principal entrada económica depende de un oficio,
          ofrecer sus servicios.<br />Actualmente existen herramientas tecnológicas que facilitan el hecho de buscar trabajo u ofrecer nuestros servicios en distintas áreas. Sin embargo
          estas herramientas no son suficientemente inclusivas como para que cualquier persona con cualquier nivel de preparación académica, pueda utilizarlas. <br /><strong>Oficitico</strong>
          propone no solo atacar el problema de la inclusividad sino también incluir la idea de un <i>portafolio</i> que le permita a las personas demostrar a través de imágenes o vídeos, la calidad de su trabajo. </p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Vuelve y cuéntanos qué tal fue tu experiencia</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><?= $this->Html->image('home/background3.jpg', ['alt' => 'Unsplashed background img 3']);?></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>





    
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <?= $this->Html->script('materialize.min.js') ?>
        <?= $this->Html->script('init.js') ?>
</body>
</html>
