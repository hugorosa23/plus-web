


<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Plus Web
      
    </title>

    
      <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic|Work+Sans:300,400,500,600' rel='stylesheet' type='text/css'>
      <link href="assets/css/toolkit-startup.css" rel="stylesheet">
      <link href="assets/css/application-startup.css" rel="stylesheet">
    

    

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      /* …curses ios, etc… */
      @media (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) {
        body {
          width: 1px;
          min-width: 100%;
          *width: 100%;
        }
        #stage {
          height: 1px;
          overflow: auto;
          min-height: 100vh;
          -webkit-overflow-scrolling: touch;
        }
      }
    </style>
  </head>


<body>
  



<div class="stage-shelf stage-shelf-right hidden" id="sidebar">
  <ul class="nav nav-bordered nav-stacked flex-column">
    <li class="nav-header">Examples</li>
    <li class="nav-item">
      <a class="nav-link active" href="../index.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Registro</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Termos de Uso</a>
    </li>
    <li class="nav-divider"></li>
    <li class="nav-header">Sobre</li>
  </ul>
</div>

<div class="stage" id="stage">
<!--Div com style para plano de fundo da parte inicial da pag.-->
<div class="block block-inverse block-fill-height app-header"
     style="background-color: #52d3aa;
     background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHZpZXdCb3g9IjAgMCAxIDEiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0idnNnZyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIwJSIgeTE9IjAlIiB4Mj0iMTAwJSIgeTI9IjEwMCUiPjxzdG9wIHN0b3AtY29sb3I9IiMzZjk1ZWEiIHN0b3Atb3BhY2l0eT0iMSIgb2Zmc2V0PSIwIi8+PHN0b3Agc3RvcC1jb2xvcj0iIzUyZDNhYSIgc3RvcC1vcGFjaXR5PSIxIiBvZmZzZXQ9IjEiLz48L2xpbmVhckdyYWRpZW50PjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjdnNnZykiIC8+PC9zdmc+);
     background-image: -webkit-gradient(linear, 0% 0%, 100% 100%, color-stop(0, #3f95ea), color-stop(1, #52d3aa));
     background-image: -webkit-repeating-linear-gradient(top left, #3f95ea 0%, #52d3aa 100%);
     background-image: repeating-linear-gradient(to bottom right, #3f95ea 0%, #52d3aa 100%);
     background-image: -ms-repeating-linear-gradient(top left, #3f95ea 0%, #52d3aa 100%);">

  <div class="container py-4 fixed-top app-navbar">
  <nav class="navbar navbar-transparent navbar-padded navbar-toggleable-sm">
    <button
      class="navbar-toggler navbar-toggler-right hidden-md-up"
      type="button"
      data-target="#stage"
      data-toggle="stage"
      data-distance="-250">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand mr-auto" href="">
      <img src="assets/img/logo.png" alt="brand" style="width:80px;">
    </a>

    <div class="hidden-sm-down text-uppercase">
      <ul class="navbar-nav">
        <li class="nav-item px-1 ">
          <a class="nav-link" href="login/index.php">Login</a>
        </li>
        <li class="nav-item px-1 ">
          <a class="nav-link" href="admin/form-add.php">Registro</a>
        </li>
        <li class="nav-item px-1 ">
          <a class="nav-link" href="#">Termos de Uso</a>
        </li>
        <li class="nav-item px-1 ">
          <a class="nav-link" href="#">Sobre</a>
        </li>
      </ul>
    </div>
  </nav>
</div>


 <!-- <img class="app-graph"  src="../assets/img/startup-0.svg">-->

  <div class="block-xs-middle pb-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-lg-6">
          <h1 class="block-titleData frequency text-muted">+Plus Web</h1>
          <p class="lead mb-4">Que tal uma ferramenta para auxiliar seu tempo de forma dinâmica e inteligente? Dê um PLUS na sua vida!</p>
          <a class="btn btn-dark btn-lg" href="admin/form-add.php">Cadastre-se agora!</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block block-secondary app-iphone-block">
  <div class="container">
    <div class="row app-align-center">

      <div class="col-sm-5 hidden-sm-down">
        <img class="app-iphone" src="assets/img/plusweb-2.png" style="width: 100%;">
      </div>

      <div class="col-md-6 offset-md-1 col-sm-12 offset-sm-0">
        <h6 class="text-uppercase text-green">Aplicação Completa</h6>
        <h3>Ferramenta perfeita para organizar o dia-a-dia.</h3>
        <p class="lead mb-4">Dá ao usuário a opornidade de gerenciar o próprio tempo de forma inteligente.</p>
        <div class="row hidden-md-down">
          <div class="col-sm-6 mb-3">
            <h5>Marque Reuniões</h5>
            <p>O +PLUS dá a oportunidade de resolver assuntos sérios de trabalho e ainda ter tempo de brincar com seus filhos. <a href="#" class="text-green">Saiba Mais.</a></p>
          </div>
          <div class="col-sm-6">
            <h5>Lembre-se que..</h5>
            <p>De acordo com as informações que nos disponibilizar, o +PLUS faz questão de alerta-lo das pequenas coisas, até quando tomar um como d'àgua. <a href="#" class="text-green">Saiba Mais</a>.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="block block-inverse block-secondary app-code-block">
  <div class="container">
    <div class="row app-align-center">
      <div class="col-md-5 push-md-7">
        <pre class="app-code">
          <span>+PLUS:</span> “Você tem um tempo livre amanhã, 
          que tal se divertir?”
          <span>+PLUS:</span> "Tenho algumas opções 
          que possam interessar."
          <span></span>
          <span>+PLUS:</span>Cinema:
          <span></span>      "Park Shopping, Av. exemplo, nº 1000." 
          <span></span>    
          <span>+PLUS:</span>Parque de Diversões: 
          <span></span>      "Av. Hakon, nº 200.",
          <span></span>    
          <span>+PLUS:</span>Parque Aquático: 
          <span></span>      "Rua Plusweb, nº 100."
        </pre>
      </div>

      <div class="col-md-6 pull-md-5">
        <h6 class="text-green text-uppercase">Simples e Fácil</h6>
        <h3>Cadastrar eventos, lembretes e datas nunca foi tão simples.</h3>
        <p class="lead mb-4 text-muted">Às vezes nem terá que lembrar, deixa que o +PLUS te avise!</p>
        <button class="btn btn-outline-default btn-lg">
          Leia Sobre
        </button>
      </div>
    </div>
  </div>
</div>

<div class="block block-secondary app-block-marketing-grid">
  <div class="container text-xs-center">

    <div class="row mb-5">
      <div class="col-xs-10 offset-xs-1 col-sm-8 offset-sm-2 col-lg-6 offset-lg-3">
        <h6 class="text-green text-uppercase mb-2">Utilidades</h6>
        <h3  class="mb-4">Não é dificil perceber que nós tornamos sua vida mais fácil todos os dias.</h3>
      </div>
    </div>

    <div class="row app-marketing-grid">
      <div class="col-md-4 px-4 mb-5">
        <img class="mb-1" src="assets/img/startup-9.svg">
        <p><strong class="text-green">24/7 online.</strong> Nossos servidores estarão sempre online, não importa onde, e o principal a ferramenta pode ser utilizada offline!</p>
      </div> 
      <div class="col-md-4 px-4 margin-t">
        <img class="mb-1" src="assets/img/startup-13.svg">
        <p><strong class="text-green">Responsivo.</strong> Acesse de qualquer dispositivo móvel, sem dores de cabeça.</p>
      </div>
      <div class="col-md-4 px-4 mb-5">
        <img class="mb-1" src="assets/img/startup-11.svg">
        <p><strong class="text-green">Utilize melhor o seu tempo.</strong> Com a ajuda do +PLUS, você conseguirá organizar o seu tempo e ser mais eficiente.</p>
      </div>
    </div>

    <div class="row app-marketing-grid">
      <div class="col-md-4 px-4 mb-5">
        <img class="mb-1" src="assets/img/startup-12.svg">
        <p><strong class="text-green">Ganhe mais.</strong> No seu trabalho ou em casa, é comprovado que tempo leva a perfeição, o +PLUS vai te ajudar a ganhar tempo para ter perfeição no seu trabalho ou em tarefas menores.</p>
      </div>
      <div class="col-md-4 px-4 mb-5"></div>
      <div class="col-md-4 px-4 mb-5">
        <img class="mb-1" src="assets/img/startup-14.svg">
        <p><strong class="text-green">Conexão Segura.</strong> Garantimos a seguridade da sua conta através das rotas de conexão.</p>
      </div>
    </div>
  </div>
</div>

<div class="block app-price-plans">
  <div class="container text-center">

    <div class="row mb-5">
      <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
        <h6 class="text-green text-uppercase mb-2">Planos</h6>
        <h3>Grátis pra vida toda. Mas se quiser uns upgrades na sua conta, temos alguns planos.</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 px-4 pb-2 mb-5">
        <div class="px-2 mb-2">
          <h6 class="text-muted text-uppercase mb-4">Sem custo</h6>
          <h1 class="mb-4 text-green">R$ 0/mês</h1>
          <p class="pb-2">Diversas funcionalidades para usufruir da aplicação.</p>
        </div>

        <ul class="list-unstyled list-bordered text-xs-left my-4">
          <li class="py-4"><strong class="text-green">Calendário. </strong>Cadastre todos os seus eventos e lembretes importantes!</li>
          <li class="py-4"><strong class="text-green">Alertas. </strong>Receba alertas inteligentes, que ajudarão a manter uma boa rotina.</li>
          <li class="py-4"><strong class="text-green">Locais. </strong>Receba informações sobre onde ir quando precisar de algo.</li>
        </ul>

        <a class="btn btn-lg app-btn-default btn-block" href="admin/form-add.php">
          Crie <span class="hidden-lg-down">agora sua conta</span>
        </a>
      </div>

      <div class="col-md-4 px-4 pb-2 mb-5">
        <div class="px-2">
          <h6 class="text-muted text-uppercase mb-4">Premium</h6>
          <h1 class="mb-4 text-green">R$ 5/mês</h1>
          <p class="pb-2">O plano perfeito para quem busca algumas regalias por um ótimo preço!.</p>
        </div>

        <ul class="list-unstyled list-bordered text-xs-left my-4">
          <li class="py-4"><strong class="text-green">Calendário. </strong>Cadastre todos os seus eventos e lembretes importantes!</li>
          <li class="py-4"><strong class="text-green">Alertas. </strong>Receba alertas inteligentes, que ajudarão a manter uma boa rotina.</li>
          <li class="py-4"><strong class="text-green">Locais. </strong>Receba informações sobre onde ir quando precisar de algo.</li>
        </ul>

        <button class="btn btn-lg app-btn-default btn-block">
          Obtenha <span class="hidden-lg-down">sua conta Premium!</span>
        </button>
      </div>

      <div class="col-md-4 px-4 pb-1 mb-5">
        <div class="px-2">
          <h6 class="text-muted text-uppercase mb-4">Gold</h6>
          <h1 class="mb-4 text-green">R$ 10/mês</h1>
          <p class="pb-2">Um plano ilimitado que tem acesso a todas as funcionalidades da aplicação.</p>
        </div>

        <ul class="list-unstyled list-bordered text-xs-left my-4">
          <li class="py-4"><strong class="text-green">Calendário. </strong>Cadastre todos os seus eventos e lembretes importantes!</li>
          <li class="py-4"><strong class="text-green">Alertas. </strong>Receba alertas inteligentes, que ajudarão a manter uma boa rotina.</li>
          <li class="py-4"><strong class="text-green">Locais. </strong>Receba informações sobre onde ir quando precisar de algo.</li>
        </ul>

        <button class="btn btn-lg app-btn-default btn-block">
          Comece <span class="hidden-lg-down">no topo, seja Gold!</span>
        </button>
      </div>
    </div>

  </div>
</div>

<div class="block block-inverse app-footer">
 <div class="container">
    <div class="row">
      <div class="col-md-5 mb-5">
        <ul class="list-unstyled list-spaced">
          <li class="mb-2"><h6 class="text-green text-uppercase">Sobre</h6></li>
          <li class="text-muted">
             Estamos trabalhando neste projeto há algum tempo para alcançar qualidade e simplicidade, estamos super orgulhosos do que alcançamos até agora. Se quiser saber mais sobre nosso trabalho, entre em contato conosco, ficaremos muito felizes! <a class="text-green" href="mailto: teamhakon@gmail.com">teamhakon@gmail.com</a>.
          </li>
        </ul>
      </div>
      <div class="col-md-2 offset-md-1 mb-5">
        <ul class="list-unstyled list-spaced">
          <li class="mb-2"><h6 class="text-green text-uppercase">Produto</h6></li>
          <li class="text-muted">Características</li>
          <li class="text-muted">Como Funciona</li>
          <li class="text-muted">Como Adquirir</li>
        </ul>
      </div>
      <div class="col-md-2 mb-5">
        <ul class="list-unstyled list-spaced">
          <li class="mb-2"><h6 class="text-green text-uppercase">Legal</h6></li>
          <li class="text-muted">Termos</li>
          <li class="text-muted">Privacidade</li>
          <li class="text-muted">Licensa</li>
        </ul>
      </div>
      <div class="col-md-2 mb-5">
        <ul class="list-unstyled list-spaced">
          <li class="mb-2"><h6 class="text-green text-uppercase">HAKON Soluções</h6></li>
          <li class="text-muted">Sobre</li>
          <li class="text-muted">História</li>
          <li class="text-muted">Time</li>
        </ul>
      </div>
    </div>
  </div>
</div>

</div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/tether.min.js"></script>
    <script src="assets/js/toolkit.js"></script>
    <script src="assets/js/application.js"></script>
  </body>
</html>

