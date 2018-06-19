<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>	
            cargando...
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style type="text/css">
            body {
                color: white;
                background-color: #000000; 
                font-family: 'Futura-Normal', arial;
                font-size: 48px;
                text-shadow: 4px 4px 4px #aaa;
            }
        </style>

    </head>

    <body>
                    <!--<h1><center><b>Cine</b></center></h1>
                    <h2><center><b>Xilotzin</b></center></h2> -->
    <center><img class="img-responsive" src="xilo2.jpg" alt="Chania"></center>
    <div class="progress" style="margin:100px">
        <div id="bar" class="progress-bar progress-bar-striped active" role="progressbar" 
             aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%; background-color:#FF43C6 !important;">
            <span class="sr-only">0% Complete</span>
        </div>
    </div>
    <!-- 
        Es el Script con el que lla barra de progreso ira creciendo cada determinado tiempo
    -->
    <script>
        var progreso = 0;
        var idIterval = setInterval(function () {
            // Aumento en 1 el progeso
            progreso += 1;
            $('#bar').css('width', progreso + '%');

            //Si llegó a 100 elimino el interval
            if (progreso == 100) {
                clearInterval(idIterval);

            }
        }, 70);
    </script>
    <!--Linea para ir a otra pagina despues de usar el splash-->
    <META HTTP-EQUIV="Refresh" CONTENT="10; URL=http://localhost/Xilo1/Home.php">
    <!--<div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar"
             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:80%;
             background-color:#FF43C6 !important;" <span class="sr-only"> 0% Cargando...</span>
            
        </div>
    </div>
     <script>
      var progreso = 0;
      var idIterval = setInterval(function(){
        // Aumento en 10 el progeso
        progreso +=10;
        $('#bar').css('width', progreso + '%');
       
      //Si llegó a 100 elimino el interval
        if(progreso == 100){
       clearInterval(idIterval);
      }
      },1000);
    </script>
    <h1><center><b><font></font>Cargando...</b></center></h1>

</body>

</html>

    <!--<html>
        <head>
            <meta charset="UTF-8">
            <title>Login</title>
        </head>
        <body>
            <h1><b><center>Login</center></b></h1>
    <?php
    echo 'hola mundo ahora soy un experto en HTML y PHP att: Claudio :D :D  ';
    ?>
             <input type="submit" src="/Xilo1.com/Home.php" value="enviar" /> 
        </body>
    </html>
    -->