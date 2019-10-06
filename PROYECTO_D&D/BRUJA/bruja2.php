<!DOCTYPE html>
<html>
<head>
	<title>BRUJA</title>
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
            background-image: url("imagenes/bruja.png");
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
            left:830px;
            width:300px;
            /*border:1px white solid;*/
        }
        #echo{
            position:absolute;
            top:980px;
            left:1185px;
            font-size:30px;
            color:black;
            /*border:1px white solid;*/
            width:120px;
        }
        
        #dado1{
            position:absolute;
            top:930px;
            left:720px;
            width: 40px;
            height: 20x;
            /*border:1px white solid;*/
            color:black;
            font-size:60px;
        }
        #dado2{
            position:absolute;
            top:930px;
            left:1100px;
            width: 40px;
            height: 20x;
            /*border:1px white solid;*/
            color:black;
            font-size:60px;
        }
        #dado11{
            position:absolute;
            top:1000px;
            left:720px;
            width: 40px;
            height: 20x;
            /*border:1px white solid;*/
            color:black;
            font-size:50px;
        }
        #dado22{
            position:absolute;
            top:1000px;
            left:1100px;
            width: 40px;
            height: 20x;
            /*border:1px white solid;*/
            color:black;
            font-size:50px;
        }
        
        #texto{
            position:absolute;
            top:940px;
            left:795px;
            width: 300px;
            height: 80px;
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
            left:820px;
            /*border:1px white solid;*/
            width: 150px;
            color:white;
            
            /*font-family:'Vecna';*/
        }
</style>
</head>
    
<body >
    <?php
    //onload="comprobar()"
    session_start();
    $vidas=$_SESSION['vidas'];
    $tokens=$_SESSION['tokens'];

            $dado1=0;
            $dado2=0;
           

            /*echo "<p id='prueba'></p>";
            
            echo "<div id='texto'><p>Una bruja te corta el paso y tienes que luchar contra ella, suerte en tu combate. ¿Que opción eliges?</p></div>";*/
            
            if (isset($_REQUEST["atacar"])){
                $dado1=rand(1,12);
                $dado1=$dado1+rand(1,12);
                $dado2=rand(1,12);
                $dado2=$dado2+rand(1,12);

               if ($dado1>$dado2){
                   //$salir=1;
                   
                    echo "<div id='echo' onclick='comprobar()'>Continuar</div>";
                    
                    echo "<div id='dado1'>⚅</div>";
                    echo "<div id='dado11'>$dado1</div>";
                    echo "<div id='dado2'>⚅</div>";
                    echo "<div id='dado22'>$dado2</div>";
                    
                    echo "<div id='resultado'>HAS GANADO</div>";
                    $tokens++;
               } else  if ($dado1==$dado2){
                    $vidas=$vidas-1;
                    echo "<div id='echo' onclick='comprobar()'>Continuar</div>";
                    
                    echo "<div id='dado1'>⚅</div>";
                    echo "<div id='dado11'>$dado1</div>";
                    echo "<div id='dado2'>⚅</div>";
                    echo "<div id='dado22'>$dado2</div>";
                    
                    echo "<div id='resultado'>HAS EMPATADO</div>";
               } else{
                    $vidas=$vidas-2;
                    echo "<div id='echo' onclick='comprobar()'>Continuar</div>";
                    
                    echo "<div id='dado1'>⚅</div>";
                    echo "<div id='dado11'>$dado1</div>";
                    echo "<div id='dado2'>⚅</div>";
                    echo "<div id='dado22'>$dado2</div>";
                    
                    echo "<div id='resultado'>HAS PERDIDO</div>";
               }

            }

            if (isset($_REQUEST["huir"])){
                $dado1=rand(1,12);
                $dado1=$dado1+rand(1,12);
                $dado2=rand(1,12);
                $dado2=$dado2+rand(1,12);

               if ($dado1>$dado2){
                   //$salir=1;
                    echo "<div id='echo' onclick='comprobar()'>Continuar</div>";
                    
                    echo "<div id='dado1'>⚅</div>";
                    echo "<div id='dado11'>$dado1</div>";
                    echo "<div id='dado2'>⚅</div>";
                    echo "<div id='dado22'>$dado2</div>";
                    
                    echo "<div id='resultado'>HAS GANADO</div>";
               } else  if ($dado1==$dado2){
                   $vidas=$vidas-1;
                   //$salir=1;
                    echo "<div id='echo' onclick='comprobar()'>Continuar</div>";
                    
                    echo "<div id='dado1'>⚅</div>";
                    echo "<div id='dado11'>$dado1</div>";
                    echo "<div id='dado2'>⚅</div>";
                    echo "<div id='dado22'>$dado2</div>";
                    
                    echo "<div id='resultado'>HAS EMPATADO</div>";
               } else{
                    $vidas=$vidas-2;
                    echo "<div id='echo' onclick='comprobar()'>Continuar</div>";
                    
                    echo "<div id='dado1'>⚅</div>";
                    echo "<div id='dado11'>$dado1</div>";
                    echo "<div id='dado2'>⚅</div>";
                    echo "<div id='dado22'>$dado2</div>";
                    
                    echo "<div id='resultado'>HAS PERDIDO</div>";
               }
            }

            if (isset($_REQUEST["defender"])){
                $dado1=rand(1,12);
                $dado1=$dado1+rand(1,12);
                $dado2=rand(1,12);
                $dado2=$dado2+rand(1,12);

               if ($dado1>$dado2){
                   //$salir=1;
                    $vidas=$vidas+1;
                    echo "<div id='echo' onclick='comprobar()'>Continuar</div>";
                    
                    echo "<div id='dado1'>⚅</div>";
                    echo "<div id='dado11'>$dado1</div>";
                    echo "<div id='dado2'>⚅</div>";
                    echo "<div id='dado22'>$dado2</div>";
                    
                    echo "<div id='resultado'>HAS GANADO</div>";
               } else  if ($dado1==$dado2){
                    $vidas=$vidas-1;
                    echo "<div id='echo' onclick='comprobar()'>Continuar</div>";
                    
                    echo "<div id='dado1'>⚅</div>";
                    echo "<div id='dado11'>$dado1</div>";
                    echo "<div id='dado2'>⚅</div>";
                    echo "<div id='dado22'>$dado2</div>";
                    
                    echo "<div id='resultado'>HAS EMPATADO</div>";
               } else{
                    $vidas=$vidas-2;
                    echo "<div id='echo' onclick='comprobar()'>Continuar</div>";
                    
                    echo "<div id='dado1'>⚅</div>";
                    echo "<div id='dado11'>$dado1</div>";
                    echo "<div id='dado2'>⚅</div>";
                    echo "<div id='dado22'>$dado2</div>";
                    
                    echo "<div id='resultado'>HAS PERDIDO</div>";
               }
            }

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
            
            if(vidas<=0){
                 window.open('../fin/derrota.php',"_self","");
            }
            else if(tokens==5){
                window.open('../fin/victoria.php',"_self","");
            }else{
                 aleatorio = Math.round(Math.random() * (7 - 0) + 0);
                //aleatorio=2;
                var paginas=["../aldeano/aldeano.php","../dragon/dragon.php","../duende/duende.php","../ent/ent.php","../hada/hada.php","../mimico/mimico.php","../orco/orco.php","../viajero/viajero.php"];
                window.open(paginas[aleatorio],"_self","");
            }
            
            document.getElementById('prueba').innerHTML=vidas+" "+tokens;
        }
        /*function continuar(){
            aleatorio = Math.round(Math.random() * (7 - 0) + 0);
            //aleatorio=2;
            var paginas=["../aldeano/aldeano.php","../dragon/dragon.php","../duende/duende.php","../ent/ent.php","../hada/hada.php","../mimico/mimico.php","../orco/orco.php","../viajero/viajero.php"];
            window.open(paginas[aleatorio],"_self","");
        }*/   
    </script>
</body>
</html>