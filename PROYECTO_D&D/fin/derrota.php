<!DOCTYPE html>
<html>
<head>
	<title>DERROTA</title>
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
            background-image: url("imagenes/perdido.png");
        }    
        
        #continuar{
            position:absolute;
            /*border:1px white solid;*/
            width: 350px;
            height: 50px;
            top:600px;
            left:810px;
        }
</style>
</head>
    
<body onload="comprobar()">
    <div id="continuar" onclick="volver()"></div>
    <?php
    session_start();
    $derrotas=$_SESSION['derrotas'];

    $derrotas++;
                    
    
    $_SESSION['derrotas']=$derrotas;
    ?>
    <script>
         function volver(){
             window.open('../menu.php',"_self","");
         }
    </script>
</body>
</html>