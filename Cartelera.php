<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            nav{

            }
        </style>

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
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home" style="color: #000000" style="font-family: futura">En este día</a></li>
            <li><a data-toggle="tab" href="#menu1" style="color: #000000">En esta semana</a></li>
            <li><a data-toggle="tab" href="#menu2" style="color: #000000">En este mes</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

                <div class="container">
                    <div class="table-responsive">          
                        <table class="table">
                            <thead>
                                <tr>
                                    <th >
                                        <img src="thorR.jpg" width="90%">
                                    </th>
                                    <th>
                                        <img src="opSombra.jpg" width="100%">
                                    </th>
                                    <th>
                                        <img src="neSolos.jpg" width="100%">
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
                                        <img src="thorR.jpg" style="width:100%;">
                                    </th>
                                    <th>
                                        <img src="opSombra.jpg" style="width:100%;">
                                    </th>
                                    <th>
                                        <img src="neSolos.jpg" style="width:100%;">
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <img src="thorR.jpg" style="width:100%;">
                                    </th>
                                    <th>
                                        <img src="opSombra.jpg" style="width:100%;">
                                    </th>
                                    <th >
                                        <img src="neSolos.jpg" style="width:100%;">
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
                                        <img src="thorR.jpg" style="width:100%;">
                                    </th>
                                    <th>
                                        <img src="opSombra.jpg" style="width:100%;">
                                    </th>
                                    <th>
                                        <img src="neSolos.jpg" style="width:100%;">
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <img src="thorR.jpg" style="width:100%;">
                                    </th>
                                    <th>
                                        <img src="opSombra.jpg" style="width:100%;">
                                    </th>
                                    <th >
                                        <img src="neSolos.jpg" style="width:100%;">
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <img src="thorR.jpg" style="width:100%;">
                                    </th>
                                    <th>
                                        <img src="opSombra.jpg" style="width:100%;">
                                    </th>
                                    <th >
                                        <img src="neSolos.jpg" style="width:100%;">
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
