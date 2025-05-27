<html>
    <head>

        </head>

    <body>

        <?php
        echo " Nombre: " . $_POST["Nombre"] . "<br>";
        echo " Apellido: " . $_POST["Apellido"]. "<br>";
        echo " Sexo: ". $_POST["Sexo"]. "<br>";
        echo " estado Civil: " . $_POST["ecivil"]. "<br>";
    
        if (isset($_POST["Aceptoinfo"])){
            echo "<p>Deseo recibir informacion y novrdades</p> ";
        }else
            echo "<p>No deseo recibir informacion y novrdades</p>";
    
        if (isset($_POST["Aceptonormas"])){
            echo "<p>Acepto las normas y condiciones</p>";
        } else {
            echo "<p>No acepto las normas y condiciones</p>";
        }
        ?>
        </body>

</html>