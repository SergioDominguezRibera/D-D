<!DOCTYPE html>
<html>
<head>
	<title>VICTORIA</title>
        <style>
        @font-face{
            font-family: 'Vecna';
            src: url('../fuente/Vecna.otf');
        }
        body { 
            font-family:'Vecna';
            background-attachment: fixed;
            background-position: center center;
            background-size: cover;
            background-image: url("imagenes/ganar.png");
        }    
        
        #continuar{
            position:absolute;
            /*border:1px white solid;*/
            width: 320px;
            height: 50px;
            top:635px;
            left:795px;
        }
</style>
</head>
    
<body onload="comprobar()">
    <div id="continuar" onclick="volver()"></div>
    <?php
    session_start();
    $victorias=$_SESSION['victorias'];

    $victorias++;
                    
    
    $_SESSION['victorias']=$victorias;
    ?>
    <script>
         function volver(){
             window.open('../menu.php',"_self","");
         }
    </script>
</body>
</html>