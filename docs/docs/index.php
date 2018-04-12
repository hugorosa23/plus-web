


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
      
        Sobre 
      
    </title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="../assets/css/toolkit.css" rel="stylesheet">
    
      <link href="../assets/css/docs.css" rel="stylesheet">
    
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
        <li class="nav-item">
            <a class="nav-link" href="../eventos/index.php">Eventos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../calendario/index.php">Calendário</a>
        </li>
        <li class="nav-item active">
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

  
    <div class="docs-header" id="content">
      <div class="container">
        <h1>Sobre</h1>
        <p>Nada com nada e mais nada resultando em nadica de nada!</p>
      </div>
    </div>
    <div class="container docs-content">
  

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

