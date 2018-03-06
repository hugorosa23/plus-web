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
      
        +Plus
      
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

        <a class="navbar-brand" href="home.php">
            <img src="../assets/img/brand.png" alt="brand">
        </a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../eventos/index.php">Eventos</a>
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
                <span class="icon icon-bell"><img src="../assets/img/gear.png" width="30px"></span>
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

    <div class="container pt-4">
    <div class="row">
        <div class="col-lg-3">
        <div class="card card-profile mb-4">
            <div class="card-header" style="background-image: url(../assets/img/bg-profile.jpg);"></div>
            <div class="card-block text-center">
            <a href="../profile/index.html">
                <img
                class="card-profile-img"
                src="../assets/img/avatar-homem.jpg">
            </a>

            <h6 class="card-title">
                <a class="text-inherit" href="../profile/index.html"><p id="nome">Hugo Rosa</p></a>
            </h6>

            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac feugiat lectus.</p>

            <ul class="card-menu">
                <li class="card-menu-item">
                <a href="../eventos/index.php" class="text-inherit">
                    Eventos
                    <h6 class="my-0 text-green">3</h6>
                </a>
                </li>

                <li class="card-menu-item">
                <a href="../lugares/index.php" class="text-inherit">
                    Locais Favoritos
                    <h6 class="my-0 text-green">2</h6>
                </a>
                </li>
            </ul>
            </div>
        </div>

        <div class="card visible-md-block visible-lg-block">
            <div class="card-block">
            <h6 class="mb-3">Locais <small>· <a href="#">Editar</a></small></h6>
            <div data-grid="images" data-target-height="150">
                <div>
                <p>Farmácia</p>
                <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/lugar1.jpg">
                </div>

                <div>
                <p>Supermercado</p>
                <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/lugar2.jpg">
                </div>

                <div>
                <p>Shopping</p>
                <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/lugar3.png">
                </div>

                <div>
                <p>Restaurante</p>
                <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/lugar4.jpg">
                </div>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-6">

        <ul class="list-group media-list media-list-stream mb-4">
            <li class="media list-group-item p-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar">
                <div class="input-group-btn">
                <button type="button" class="btn btn-secondary">
                <span class="icon"><img src="../assets/img/search.png"></span>
                </button>
                </div>
            </div>
            </li>

            <li class="media list-group-item p-4">
            <h5>Cordão dos Lembretes</h5>
            </li>
            
            <li class="media list-group-item p-4">
            <div class="media-body">

            <div class="col-lg-12">
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
            </div>
            </li>
                

            <li class="media list-group-item p-4">
            <div class="media-body">
            <div class="col-lg-12">
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
            </div>
            
            <li class="media list-group-item p-4">
                <div class="media-body">
                <div class="col-lg-12">
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
            
            </li>

            <li class="media list-group-item p-4">
                <div class="media-body">
                    <div class="media-heading">
                        <h6>Calendário</h6>
                    </div>
                        
                    <div class="col-lg-12">
                        <iframe width="550px" height="900px" frameborder="0" style="border:0" src="../calendario/index.php#calendar" allowfullscreen></iframe>
                    </div>
                </div>
            </li>
        </div>
        <div class="col-lg-3">
        <div class="alert alert-warning alert-dismissible hidden-md-down" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <a class="alert-link" href="../eventos/index.php">Acesse a aba eventos</a> Pode haver algum evento bem próximo, prepare-se.
        </div>

        <div class="card mb-4 hidden-md-down">
            <div class="card-block">
            <h6 class="mb-3">Publicidade</h6>
            <div data-grid="images" data-target-height="150">
                <img class="media-object" data-width="640" data-height="640" data-action="zoom" src="../assets/img/hakon-pub.png">
            </div>
            <p><strong>Que tal conhecer a Hakon?</strong> <br>Hakon é um empresa de tecnologia com enfase na qualidade e entrega, acompanhe de perto seus projetos inovadores!</p>
            <button class="btn btn-outline-default btn-sm">Conhecer</button>
            </div>
        </div>

        <div class="card card-link-list">
            <div class="card-block">
            &copy; <?php echo date("Y"); ?> HAKON
            <a href="#" class="text-green">Sobre</a>
            <a href="#" class="text-green">Ajuda</a>
            <a href="#" class="text-green">Termos</a>
            <a href="#" class="text-green">Privacidade</a>
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

