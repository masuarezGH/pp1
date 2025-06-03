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
                public function mostrar(){
                    echo "<br>Nombre: ".$this->nombre;
                    echo "<br>Edad: ".$this->edad;   
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
                public function mostrar(){
                    parent::mostrar();
                    echo "<br>Sueldo: $".$this->sueldo;
                }
            }
            $persona = new Persona();
            echo $persona->setNombre("Mateo");
            echo $persona->setEdad(25);
            $empleado = new Empleado ();
            echo $empleado->setNombre("Mariano");
            echo $empleado->setEdad(40);
            echo $empleado->setSueldo(40000);

            echo $persona->mostrar();
            echo $empleado->mostrar();

        ?>
        </body>

</html>