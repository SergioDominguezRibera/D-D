<!DOCTYPE html>
<html>
<head>
	<title>BRUJA</title>
    <?php
        session_start();
        $_SESSION['victorias']=0;
        $_SESSION['derrotas']=0;
        $_SESSION['aldeano']=0;
    ?>
</head>
<body onload="empezar()">
    <script>

        function empezar(){
            window.open('menu.php',"_self","");
        }   
    </script>
</body>
</html>