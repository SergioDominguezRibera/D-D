<!DOCTYPE html>
<html>
<head>
	<title>PUNTUACION</title>
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
            background-image: url("imagenes/puntuacion.png");
        }    
        
        #volver{
            position:absolute;
            /*border:1px white solid;*/
            width: 230px;
            top:700px;
            left:860px;
            
            font-size:60px;
            color:white;
        }
        
        #vic{
            position:absolute;
            /*border:1px white solid;*/
            left:695px;
            top:500px ;
            
            font-size:80px;
            color:white;
        }
        #der{
            position:absolute;
           /* border:1px white solid;*/
            left:1180px;
            top:500px ;
            
            font-size:80px;
            color:white;
        }
</style>
</head>
    
<body onload="comprobar()">
    <div id="volver" onclick="volver()">VOLVER</div>
    <?php
    session_start();
    $victorias=$_SESSION['victorias'];
    $derrotas=$_SESSION['derrotas'];
    
    $contv=0;
    $contd=0;
    
    $contv=$contv+$victorias;
    $contd=$contd+$derrotas;
    echo "<div id='vic'>$contv</div>";
    echo "<div id='der'>$contd</div>";
    ?>
    <script>
         function volver(){
             window.open('../menu.php',"_self","");
         }
    </script>
</body>
</html>