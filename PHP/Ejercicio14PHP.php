<html>
    <head>

        </head>

    <body>

        <?php 

            try{
                validar($_POST["Nombre"],$_POST["Apellido"]);
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
            }
                catch(Exception $e){
                    echo 'Ha habido una excepcion '.$e->getMessage();
                    echo '<br><a href="introduccion_html_ejercicio11-14.html">Pulse aqui para hacer el formulario</a>';
                }

                function validar($nombre,$apellido){
                    if ($nombre == null && $apellido == null){
                        throw new Exception('Debes incertar un nombre y un apellido');
                    
                        
                    }else if ($apellido == null){
                        throw new Exception('Debes incertar un apellido ');
                    } else if ($nombre == null){
                        throw new Exception('Debes incertar un nombre ');
                    }
                    else
                    return true;
                } 
        ?>
        </body>

</html>