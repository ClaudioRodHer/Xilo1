<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cine Xilotzin</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="http://allfont.es/allfont.css?fonts=futura-normal" rel="stylesheet" type="text/css" />

        <LINK REL=StyleSheet HREF="DarkTheme.css" TYPE="text/css" MEDI#6526A1#6526A1#6526A1A=screen>
        <style type="text/css">
            body {
                color: black;
                background-color: #FF43C6 
            }
            nav{

            }
        </style>


    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">

                <ul class="nav navbar-nav">
                    <li class="active"><a href="Home.php">Inicio</a></li>
                    <li><a href="Cartelera.php">Cartelera</a></li>
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
    
        <h1><b><center><?php
                    echo 'Cine Xilotzin';
                    ?></center></b></h1>

        <div class="container"> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="cine3.jpg" alt="Estreno!!" style="width:70%;">
                    </div>

                    <div class="item">
                        <img src="cine2.jpg" alt="Aprovecha" style="width:40%;">
                    </div>

                    <div class="item">
                        <img src="cine1.jpg" alt="Ven y Festeja con nosotros" style="width:70%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </body>
</html>