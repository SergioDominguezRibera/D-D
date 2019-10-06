<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
	<title>MENU</title>
</head>
<style type="text/css"> 
    body { 
    background-attachment: fixed;
            background-position: center center;
            background-size: cover;
            background-image: url("imagenes/fondo.png");
    }
    #cruzj{
            position: absolute;
            top:270px;
            left:600px;
            width: 181px;
            height: 324px;
            background: url();
    }
    #cruzp{
            position: absolute;
            top:410px;
            left:450px;
            width: 181px;
            height: 324px;
            background: url();
    }
    #cruzs{
            position: absolute;
            top:570px;
            left:610px;
            width: 181px;
            height: 324px;
            background: url();
    }
    #jugar{
            position: absolute;
            top: 400px;
            left: 780px;
            width: 333px;
            height: 80px;
            /*border: 3px blue solid;*/
    }
    #puntuacion{
            position: absolute;
            top: 540px;
            left: 635px;
            width: 650px;
            height: 80px;
           /* border: 3px red solid;*/
    }
    #salir{
            position: absolute;
            top: 695px;
            left: 790px;
            width: 310px;
            height: 80px;
            /*border: 3px red solid;*/
    }
</style>
<body>
    
    
    <?php
        // put your code here
    session_start();
    $_SESSION['vidas']="6";
    $_SESSION['tokens']="0";
    
    
    ?>
    <div id="cruzj"></div>
    <div id="cruzp"></div>
    <div id="cruzs"></div>
     
    <p id="prueba"></p>
    <div id="jugar" onmouseover="jugar()" onmouseout='jugarfuera()' onclick='empezar()'></div>
    <div id="puntuacion" onmouseover="puntuacion()" onmouseout='puntuacionfuera()' onclick='puntos()'></div>
    <a onclick='cerrarventana()'><div id="salir" onmouseover="salir()" onmouseout='salirfuera()'></div></a>
 
    <script>
        function jugar(){
            var imagen=document.getElementById("cruzj");
            imagen.style.backgroundImage = "url('imagenes/cruz.png')";
        }
        function jugarfuera(){
            var imagen=document.getElementById("cruzj");
            imagen.style.backgroundImage = "url('')";
        }
        
        function puntuacion(){
            var imagen=document.getElementById("cruzp");
            imagen.style.backgroundImage = "url('imagenes/cruz.png')";
        }
        function puntuacionfuera(){
            var imagen=document.getElementById("cruzp");
            imagen.style.backgroundImage = "url('')";
        }
        
        function salir(){
            var imagen=document.getElementById("cruzs");
            imagen.style.backgroundImage = "url('imagenes/cruz.png')";
        }
        function salirfuera(){
            var imagen=document.getElementById("cruzs");
            imagen.style.backgroundImage = "url('')";
        }
        
        function empezar(){
            window.open('intro/intro.html',"_self","");
        }
        
        function puntos(){
            window.open('puntuacion/puntuacion.php',"_self","");
        }
        
        function cerrarventana(){
            var ventana = window.self;
            ventana.opener = window.self;
            ventana.close();
        }
    </script>
</body>
</html>
