<!DOCTYPE html>
<html>
<head>
	<title>HADA</title>
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
            background-image: url("imagenes/hada.png");
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
            left:795px;
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
            top:960px;
            left:740px;
            width: 300px;
            height: 80px;
            font-size:18px;
            /*border:1px white solid;*/
        }
        
        #texto2{
            position:absolute;
            top:940px;
            left:740px;
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
   

<body>
   
    <?php
    // onload="comprobar()"
    echo "<div id='texto2'><p id='texto3'></p></div>";
    
    session_start();
    $vidas=$_SESSION['vidas'];
    $tokens=$_SESSION['tokens'];

    $ayuda[0]="tokens";
    $ayuda[1]="saludar";
    $ayuda[2]="vida";
    $ayuda[3]="saludar";
    $ayuda[4]="saludar";
    $ayuda[5]="vida";
    $ayuda[6]="saludar";
    $ayuda[7]="vida";
    $ayuda[8]="tokens";
    $ayuda[9]="saludar";
    
    
    
    if(isset($_REQUEST["continuar"])){
        
         
       
        $num=rand(0,9);
        
        if ($ayuda[$num] == "tokens"){
          echo "<div id='echo' onclick='comprobar()'>Continuar</div>";
          echo "<div id='texto'>Le caes muy bien y decide ayudarte en tu viaje, te otroga un token para que cumplas con tu destino</div>";
          $tokens++;
       
        } else if ($ayuda[$num]=="saludar"){
          echo "<div id='echo' onclick='comprobar()'>Continuar</div>";
          echo "<div id='texto'>Menos mal alguien racionable con quien relajarse y hablar en vez de un mounstro que quiere tu cabeza en su chimenea</div>";
       
        }else if ($ayuda[$num]=="vida"){
          echo "<div id='echo' onclick='comprobar()'>Continuar</div>";
          echo "<div id='texto'>Se ofrece a currar tus heridas y aceptas, cuando acaba te sientes como nuevo, le das las gracias y continuas con tu camino</div>";
          $vidas++;
       
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
                var paginas=["../aldeano/aldeano.php","../bruja/bruja.php","../dragon/dragon.php","../duende/duende.php","../ent/ent.php","../mimico/mimico.php","../orco/orco.php","../viajero/viajero.php"];
                window.open(paginas[aleatorio],"_self","");
            }
            
            document.getElementById('prueba').innerHTML=vidas+" "+tokens;     
        }
        
        /*function continuar(){
            aleatorio = Math.round(Math.random() * (7 - 0) + 0);
            //aleatorio=2;
            var paginas=["../aldeano/aldeano.php","../bruja/bruja.php","../dragon/dragon.php","../duende/duende.php","../ent/ent.php","../mimico/mimico.php","../orco/orco.php","../viajero/viajero.php"];
            window.open(paginas[aleatorio],"_self","");
        } */
    </script>
</body>
</html>