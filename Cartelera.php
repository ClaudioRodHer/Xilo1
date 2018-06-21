<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cartelera</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="http://allfont.es/allfont.css?fonts=futura-normal" rel="stylesheet" type="text/css" />
        <LINK REL=StyleSheet HREF="DarkTheme.css" TYPE="text/css" MEDI#6526A1#6526A1#6526A1A=screen>
        <style type="text/css">
            @font-face{
                font-family: 'Futura-Bold', arial;
                src: url("http://allfont.es/allfont.css?fonts=futura-bold");
            }
            body {
                color: black;
                background-color: #FF43C6;
                font-family: 'Futura-Bold';
            }
        </style>
        <script>
            $(document).ready(function () {
                $('[data-toggle="popover"]').mouseout();
            });
        </script>
    </head>
    <body>
        
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="Home.php">Inicio</a></li>
                    <li class="active"><a href="Cartelera.php">Cartelera</a></li>
                    <li><a href="Dulceria.php">Dulceria</a></li>
                    <li><a href="Promociones.php">Promociones</a></li>
                    <li><a href= "Boletos.php">Boletos</a></li>
                    <li><a href="Historia.php">Historia</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="fa fa-facebook"></span> </a></li>
                    <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </nav> 
        <!-- --------------------------AQUI EMPIEZA EL CODIGO DE LA PAGINA----------------------- -->         
        <ul class="nav nav-tabs" >
            <li class="active" style='font-size: 20px'><a data-toggle="tab" href="#home" style="color: #000000" style="font-family: futura">En este día</a></li>
            <li style='font-size: 20px'><a data-toggle="tab" href="#menu1" style="color: #000000">En esta semana</a></li>
            <li style='font-size: 20px'><a data-toggle="tab" href="#menu2" style="color: #000000">En este mes</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

                <div class="container">
                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                    <th >
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="thorR.jpg" width="100%">
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="dragon.jpg" width="100%">
                                            </a>
                                    </th>
                                    <th>
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="casab.jpg" width="100%">
                                            </a>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>


            </div>
            <div id="menu1" class="tab-pane fade">

                <div class="container">
                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                    <th >
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="thorR.jpg" width="100%">
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="dragon.jpg" width="100%">
                                            </a>
                                    </th>
                                    <th>
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="casab.jpg" width="100%">
                                            </a>
                                    </th>
                                </tr>
                                <tr>
                                    <th >
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="dragon.jpg" width="100%">
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="casab.jpg" width="100%">
                                            </a>
                                    </th>
                                    <th>
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="thorR.jpg" width="100%">
                                            </a>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
            <div id="menu2" class="tab-pane fade">

                <div class="container">
                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                    <th >
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="thorR.jpg" width="100%">
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="dragon.jpg" width="100%">
                                            </a>
                                    </th>
                                    <th>
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="casab.jpg" width="100%">
                                            </a>
                                    </th>
                                </tr>
                                <tr>
                                    <th >
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="dragon.jpg" width="100%">
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="casab.jpg" width="100%">
                                            </a>
                                    </th>
                                    <th>
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="thorR.jpg" width="100%">
                                            </a>
                                    </th>
                                </tr>
                                <tr>
                                    <th >
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="casab.jpg" width="100%">
                                        </a>
                                    </th>
                                    <th>
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="thorR.jpg" width="100%">
                                            </a>
                                    </th>
                                    <th>
                                        <a href="#" data-toggle="popover" title=
                                           "Esta es la parte en donde ir la informacion de la pelicula como la duracion, el año en el que se estreno y otro tipo de datos que se deseen sobre la pelicula"
                                           data-content="Some content inside the popover">
                                            <img src="dragon.jpg" width="100%">
                                            </a>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>