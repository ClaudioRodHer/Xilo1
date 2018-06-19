<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>	
            Boletos
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="http://allfont.es/allfont.css?fonts=futura-normal" rel="stylesheet" type="text/css" />

        <LINK REL=StyleSheet HREF="DarkTheme.css" TYPE="text/css" MEDI#6526A1#6526A1#6526A1A=screen>
        <style>
            * {box-sizing: border-box}
            body {
                font-family: "Lato", sans-serif;
                background-color:#FF43C6 
            }

            /* Style the tab */
            .tab {
                float: left;
                border: 1px solid #000000;
                background-color: #f1f1f1;/*COLOR DE FONDO DE LAS  TABS*/
                width: 30%;
                height: 300px;
            }

            /* Style the buttons inside the tab */
            .tab button {
                display: block;
                background-color: inherit; /*ESPARA EL COLOR SIN SELECCIONAR DE LAS TABS*/
                color: black;
                padding: 22px 16px;
                width: 100%;
                border: none;
                outline: none;
                text-align: left;
                cursor: pointer;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;/*ESPARA EL COLOR AL PASAR EL CURSOR PARA SELECCIONAR DE LAS TABS*/
            }

            /* Create an active/current "tab button" class */
            .tab button.active {
                background-color: #ccc;/*ESPARA EL COLOR AL SELECCIONAR DE LAS TABS*/
            }

            /* Style the tab content */
            .tabcontent {
                float: left;
                padding: 0px 12px;
                border: 1px solid #ccc;
                background-color:#000000;
                width: 70%;
                border-left: none;
                height: 300px;
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

        <h1><center><b>Funciones</b></center></h1> 

        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
        </div>

        <div id="London" class="tabcontent">
            <h3>London</h3>
            <p>London is the capital city of England.</p>
        </div>

        <div id="Paris" class="tabcontent">
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p> 
        </div>

        <div id="Tokyo" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>

        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }

        // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>

    </body>
</html> 