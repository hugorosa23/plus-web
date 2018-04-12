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

        <title>Calendário</title>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
        <link href='css/fullcalendar.min.css' rel='stylesheet' />
        <link href='css/navbar.fix.css' rel='stylesheet' />
        <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <link href="../assets/css/toolkit.css" rel="stylesheet"/>
        <link href="../assets/css/application.css" rel="stylesheet"/>
        <script src='lib/moment.min.js'></script>
        <script src='lib/jquery.min.js'></script>
        <script src='js/fullcalendar.min.js'></script>
        <script src='js/theme-chooser.js'></script>
        <script src='js/locale-all.js'></script>
        <script>
            $(document).ready(function() {
                var initialLocaleCode = 'pt-br';
                var inicialTheme = 'minty'
            
                initThemeChooser({
            
                init: function(themeSystem) {
                    $('#calendar').fullCalendar({
                    themeSystem: themeSystem,
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay,listMonth'
                    },
                    defaultDate: '2018-04-12',
                    locale: initialLocaleCode,
                    theme: inicialTheme,
                    weekNumbers: true,
                    navLinks: true, // can click day/week names to navigate views
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: [
                        {
                        title: 'Evento o dia inteiro',
                        start: '2018-04-01'
                        },
                        {
                        title: 'Evento Longo',
                        start: '2018-04-07',
                        end: '2018-04-10'
                        },
                        {
                        id: 999,
                        title: 'Repetindo Evento',
                        start: '2018-04-09T16:00:00'
                        },
                        {
                        id: 999,
                        title: 'Repetindo Evento',
                        start: '2018-04-16T16:00:00'
                        },
                        {
                        title: 'Reunião',
                        start: '2018-04-11',
                        end: '2018-04-13'
                        },
                        {
                        title: 'Encontro',
                        start: '2018-04-12T10:30:00',
                        end: '2018-04-12T12:30:00'
                        },
                        {
                        title: 'Almoço',
                        start: '2018-04-12T12:00:00'
                        },
                        {
                        title: 'Reunião',
                        start: '2018-04-12T14:30:00'
                        },
                        {
                        title: 'Happy Hour',
                        start: '2018-03-12T17:30:00'
                        },
                        {
                        title: 'Jantar',
                        start: '2018-04-12T20:00:00'
                        },
                        {
                        title: 'Festa de Aniversário',
                        start: '2018-04-13T07:00:00'
                        },
                        {
                        title: 'Click para acessar o link(teste)',
                        url: 'http://google.com/',
                        start: '2018-04-28'
                        }
                    ]
                    });
                },
            
                change: function(themeSystem) {
                    $('#calendar').fullCalendar('option', 'themeSystem', themeSystem);
                }
            
                });
            
            });

        </script>
        <style>

            body {
                margin: 0;
                padding: 0;
                font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
                font-size: 14px;
            }

            #top {
                background: #eee;
                border-bottom: 1px solid #ddd;
                padding: 0 10px;
                line-height: 40px;
                font-size: 12px;
            }

            #calendar {
                max-width: 900px;
                margin: 40px auto;
                padding: 0 10px;
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
            <li class="nav-item active">
                <a class="nav-link" href="#">Calendário</a>
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
      
        <div id="wrap">
            <div id='top'>

                <div class='left' style='display:none'>

                    <div id='theme-system-selector' class='selector'>
                        Tema:

                        <select>
                        <option value='bootstrap4' selected>Bootstrap 4</option>
                        </select>
                    </div>

                    
                    <div data-theme-system="bootstrap4" class='selector' style='display:none'>
                        Nome do Tema:

                        <select>
                        <option value='' >Default</option>
                        <option value='cerulean'>Cerulean</option>
                        <option value='cosmo'>Cosmo</option>
                        <option value='cyborg'>Cyborg</option>
                        <option value='darkly'>Darkly</option>
                        <option value='flatly'>Flatly</option>
                        <option value='journal'>Journal</option>
                        <option value='litera'>Litera</option>
                        <option value='lumen'>Lumen</option>
                        <option value='lux'>Lux</option>
                        <option value='materia'>Materia</option>
                        <option value='minty' selected>Minty</option>
                        <option value='pulse'>Pulse</option>
                        <option value='sandstone'>Sandstone</option>
                        <option value='simplex'>Simplex</option>
                        <option value='sketchy'>Sketchy</option>
                        <option value='slate'>Slate</option>
                        <option value='solar'>Solar</option>
                        <option value='spacelab'>Spacelab</option>
                        <option value='superhero'>Superhero</option>
                        <option value='united'>United</option>
                        <option value='yeti'>Yeti</option>
                        </select>
                    </div>

                    <span id='loading' style='display:none'>Carregando Tema...</span>

                </div>

                <div class='right'style='display:none'>
                    <span class='credits' data-credit-id='bootstrap-standard' style='display:none'>
                        <a href='https://getbootstrap.com/docs/3.3/' target='_blank'>Theme by Bootstrap</a>
                    </span>
                </div>

                <div class='clear'></div>
            </div>

                <div id='calendar'></div>

            
        </div>
    </body>
</html>

