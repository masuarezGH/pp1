<html>
    <head>

        </head>

    <body>

        <?php 
        $num1 = $_GET["var1"];
        $num2 = $_GET["var2"];
        if ($num1>$num2){
            echo"<p>$num1 es mayor que $num2</p>";
        } else if ($num1<$num2){
            echo"<p>$num1 es menor que $num2</p>";
        } else{
        echo "<p>los numeros son iguales</p>";
        }
        ?>
        </body>

</html>