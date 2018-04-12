<?php
session_start();
 
require_once '..\vendor\init.php';

require '..\vendor\check.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
       Eventos
      
    </title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="../assets/css/toolkit.css" rel="stylesheet">
    
    <link href="../assets/css/application.css" rel="stylesheet">

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>

  </head>


<body class="with-top-navbar">

<div class="growl" id="app-growl"></div>
<nav class="navbar navbar-toggleable-sm fixed-top navbar-inverse app-navbar">
<button
    class="navbar-toggler navbar-toggler-right hidden-md-up"
    type="button"
    data-toggle="collapse"
    data-target="#navbarResponsive"
    aria-controls="navbarResponsive"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<a class="navbar-brand" href="../home/home.php">
<img src="../assets/img/brand.png" alt="brand">
</a>

<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="../home/home.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="#">Eventos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../calendario/index.php">Calendário</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../docs/index.php">Sobre</a>
    </li>

    <li class="nav-item hidden-md-up">
        <a class="nav-link" href="../notifications/index.html">Configurações</a>
    </li>
    <li class="nav-item hidden-md-up">
        <a class="nav-link" data-action="growl" href="../profile/index.html">Perfil</a>
    </li>
    <li class="nav-item hidden-md-up">
        <a class="nav-link" href="../index.php">Sair</a>
    </li>

    </ul>

    <ul id="#js-popoverContent" class="nav navbar-nav float-right mr-0 hidden-sm-down">
    <li class="nav-item">
        <a class="app-notifications nav-link" href="../notifications/index.html">
        <span class="icon icon-bell"></span>
        </a>
    </li>
    <li class="nav-item ml-2" style="margin-top: 7px">
        <button class="btn btn-default navbar-btn navbar-btn-avatar" data-toggle="popover">
        <img class="rounded-circle" src="../assets/img/avatar-homem.jpg">
        </button>
    </li>
    </ul>

    <ul class="nav navbar-nav hidden-xs-up" id="js-popoverContent">
    <li class="nav-item"><a class="nav-link" href="../profile/index.html" data-action="growl">Configurações</a></li>
    <li class="nav-item"><a class="nav-link" href="../profile/index.html" data-action="growl">Perfil</a></li>
    <li class="nav-item"><a class="nav-link" href="../index.php">Sair</a></li>
    </ul>
</div>
</nav>


<div class="profile-header" style="background-image: url(../assets/img/full_image_1.jpg);">
  <div class="container">
    <div class="container-inner">
      <img class="rounded-circle media-object" src="../assets/img/avatar-homem.jpg">
      <h3 class="profile-header-user">Hugo Rosa</h3>
      <p class="profile-header-bio">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac feugiat lectus.
      </p>
    </div>
  </div>

  <nav class="profile-header-nav">
    <ul class="nav nav-tabs justify-content-center">
      <li class="nav-item active">
        <a class="nav-link" href="#">Eventos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lugares</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre</a>
      </li>
    </ul>
  </nav>
</div>
<div class="modal fade" id="eventoModal" tabindex="-1" role="dialog" aria-labelledby="eventoModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Novo Evento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>

      <div class="modal-body">
          <form>
            <div class="form-group"> 
              <label for="Evento" class="form-control-label">Título:</label>
              <input type="text" class="form-control" placeholder="Nome do Evento" required="true" id="nome-evento" name="nome-ev"> 
              <label for="Evento" class="form-control-label">Localização:</label>
              <input type="text" class="form-control" placeholder="Local do Evento" required="true" id="local-evento" name="local-ev"> 
              <label for="Evento" class="form-control-label">Convidados:</label>
              <input type="text" class="form-control" placeholder="Convidados do Evento" required="false" id="convidado-evento" name="convidado-ev"> 
              <label for="Evento" class="form-control-label">Descrição:</label>
              <textarea rows="4" cols="50" class="form-control" placeholder="Descrição do Evento" required="false" id="desc-evento" name="desc-ev"></textarea>
            </div>
            <div class="form-inline"> 
                <label for="Evento" class="form-control-label">Data: </label>
                <input type="date" class="form-control" required="true" id="data-evento" name="data-ev">

                <label for="Evento" class="form-control-label">Hora: </label>
                <input type="time" class="form-control" required="true" id="hora-evento" name="hora-ev"> 
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Fechar</button>
        <button href="#" class="btn app-btn-default">Cadastrar</button>
      </div>
    </div>
  </div>
</div>

<div class="float-right">
  <button class="btn app-btn-default mt-4 mr-5" data-toggle="modal" href="#eventoModal"><span class="icon icon-plus"></span>Novo Evento</button>
</div>

<div class="container mt-5">
  <div class="row">
      <div class="col-lg-4">
        <div class="card card-evento mb-4">
          <div class="card-header"><iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJlWAAAK9FAQcRKVUZZqRndZU&key=AIzaSyBno17GpgpsZBhoV13ItBzP-DZJ4lxCI04" allowfullscreen></iframe></div>
          <div class="card-block text-center">

          <h6 class="card-title">
              <a class="text-inherit">Comprar remédio contra dor de cabeça<small>· <a href="#" class="text-green">Editar</a></small></a>
          </h6>

          <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac feugiat lectus.</p>

          <ul class="card-menu">
              <li class="card-menu-item">
              <a href="#userModal" class="text-inherit" data-toggle="modal">
                  Data
                  <h6 class="my-0 text-green">29/12/2017 - 16:00hrs</h6>
              </a>
              </li>
          </ul>
          </div>
      </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-evento mb-4">
          <div class="card-header"><iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ331DvoZGAQcRKbCt333CM0c&key=AIzaSyBno17GpgpsZBhoV13ItBzP-DZJ4lxCI04" allowfullscreen></iframe></div>
          <div class="card-block text-center">

          <h6 class="card-title">
              <a class="text-inherit">Ano novo!<small>· <a href="#" class="text-green">Editar</a></small></a>
          </h6>

          <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac feugiat lectus.</p>

          <ul class="card-menu">
              <li class="card-menu-item">
              <a href="#userModal" class="text-inherit" data-toggle="modal">
                  Data
                  <h6 class="my-0 text-green">31/12/2017 - 00:00hrs</h6>
              </a>
              </li>
          </ul>
          </div>
      </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-evento mb-4">
          <div class="card-header"><iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ7R8XbaxFAQcRIy8A4nQrAYc&key=AIzaSyBno17GpgpsZBhoV13ItBzP-DZJ4lxCI04" allowfullscreen></iframe></div>
          <div class="card-block text-center">

          <h6 class="card-title">
              <a class="text-inherit">Apresentação da equipe Hakon<small>· <a href="#" class="text-green">Editar</a></small></p></a>
          </h6>

          <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac feugiat lectus.</p>

          <ul class="card-menu">
              <li class="card-menu-item">
              <a href="#userModal" class="text-inherit" data-toggle="modal">
                  Data
                  <h6 class="my-0 text-green">29/12/2017 - 19:00hrs</h6>
              </a>
              </li>
          </ul>
          </div>
      </div>
    </div>
  </div>
</div>


    <script src="../assets/js/jquery.min.js"></script>    
    <script src="../assets/js/tether.min.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/toolkit.js"></script>
    <script src="../assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){
        if (window.BS&&window.BS.loader&&window.BS.loader.length) {
          while(BS.loader.length){(BS.loader.pop())()}
        }
      })
    </script>
  </body>
</html>

