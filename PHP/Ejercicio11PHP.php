<html>
    <head>

        </head>

    <body>

        <?php
            class Persona {
                private $edad;
                private $nombre;
                public function setEdad($edad){
                $this->edad = $edad;
                }
                public function setNombre($nombre){
                    $this->nombre = $nombre;
                }
                public function getEdad(){
                    return $this->edad;
                }
                public function getNombre(){
                    return $this->nombre;
                }
            }
            class Empleado extends Persona{
                private $sueldo;
                public function setSueldo($sueldo){
                    $this->sueldo = $sueldo;
                }
                public function getSueldo(){
                    return $this->sueldo;
                }
            }
            $persona = new Persona();
            echo $persona->setNombre("Mateo");
            echo $persona->setEdad(25);
            $empleado = new Empleado ();
            echo $empleado->setNombre("Mariano");
            echo $empleado->setEdad(40);
            echo $empleado->setSueldo(40000);

            echo "<br>Nombre de persona: ".$persona->getNombre();
            echo "<br>Edad de la persona: ".$persona->getEdad();
            echo "<br>Nombre de empleado: ".$empleado->getNombre();
            echo "<br>Edad del empleado: ".$empleado->getEdad();
            echo "<br>Sueldo del empleado: ".$empleado->getSueldo();

        ?>
        </body>

</html>