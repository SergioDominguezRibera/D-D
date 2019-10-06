<!DOCTYPE html>
<html>
<head>
	<title>VIAJERO</title>
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
            background-image: url("imagenes/viajero.png");
        }
        
        #vidas{
            position: relative;
            float:left;
            color:red;
            font-size:55px;
            width: 25px;
            height: 25px;
            /*border :1px black solid;*/
            left:375px;
            top:130px;
            margin:3px;
        }
        #todo{
            position:absolute;
            top:1027px;
            left:900px;
            width:300px;
            /*border:1px white solid;*/
        }
        #echo{
            position:absolute;
            top:980px;
            left:1130px;
            font-size:30px;
            color:black;
            /*border:1px white solid;*/
            width:120px;
        }
        
        #dado1{
            position:absolute;
            top:930px;
            left:665px;
            width: 40px;
            height: 20x;
            /*border:1px white solid;*/
            color:black;
            font-size:60px;
        }
        #dado2{
            position:absolute;
            top:930px;
            left:1055px;
            width: 40px;
            height: 20x;
            /*border:1px white solid;*/
            color:black;
            font-size:60px;
        }
        #dado11{
            position:absolute;
            top:1000px;
            left:670px;
            width: 40px;
            height: 20x;
            /*border:1px white solid;*/
            color:black;
            font-size:50px;
        }
        #dado22{
            position:absolute;
            top:1000px;
            left:1055px;
            width: 40px;
            height: 20x;
            /*border:1px white solid;*/
            color:black;
            font-size:50px;
        }
        
        #texto{
            position:absolute;
            top:940px;
            left:740px;
            width: 300px;
            height: 80px;
            font-size:18px;
            /*border:1px white solid;*/
        }
        
        #texto2{
            position:absolute;
            top:960px;
            left:850px;
            width: 300px;

            font-size:18px;
            /*border:1px white solid;*/
        }
        
        #token{
            position:absolute;
            font-size:55px;
            color:yellow;
            top:150px;
            left:50px;
        }
        #ntoken{
            position:absolute;
            color:white;
            font-size:50px;
            top:150px;
            left:110px;
        }
        
        #resultado{
            position:absolute;
            top:920px;
            left:765px;
            /*border:1px white solid;*/
            width: 150px;
            color:white;
            
            /*font-family:'Vecna';*/
        }
        #frase{
            position:absolute;
            top:920px;
            left:765px;
            /*border:1px white solid;*/
            width: 150px;
            color:white;
        }
        #texto3{
            color:blue;
        }
</style>
</head>
    <div id="todo">
        <form action="viajero2.php">
            <input type="submit" name="continuar" value="CONTINUAR">
        </form>
    </div>

<body onload="comprobar()">
   
    <?php
    echo "<div id='texto2'>Te cruzas con un viajero y decides descanasar un rato mientras os contais batallitas.</div>";/*AQUI---------------------------------------*/
    
    session_start();
    $vidas=$_SESSION['vidas'];
    $tokens=$_SESSION['tokens'];
    $aldeano=$_SESSION['aldeano'];
   
    for ($i=0;$i<$vidas;$i++){
        echo "<div id='vidas'><p> ♥ </p></div>";
    }    

    echo "<div id='token'>☼</div>";
    echo "<div id='ntoken'>x$tokens</div>";  
    
    
    $_SESSION['vidas']=$vidas;
    $_SESSION['tokens']=$tokens;
    ?>
    <script>
        function comprobar(){
            var tokens="<?php echo $tokens;?>";
            var vidas="<?php echo $vidas;?>";
            
            document.getElementById('prueba').innerHTML=vidas+" "+tokens;     
        }
        
        function continuar(){
            aleatorio = Math.round(Math.random() * (8 - 0) + 0);
            //aleatorio=2;
            var paginas=["../aldeano/aldeano.php","../bruja/bruja.php","../dragon/dragon.php","../duende/duende.php","../ent/ent.php","../hada/hada.php","../mimico/mimico.php","../orco/orco.php","../viajero/viajero.php"];
            window.open(paginas[aleatorio],"_self","");
        } 
    </script>
</body>
</html>