<html>
    <head>

        </head>

    <body>

        <?php
        class Empleado {
            private $nombre;
            private $sueldo;
            public function __construct($nombre,$sueldo){
                $this->nombre = $nombre;
                $this->sueldo = $sueldo;
            }
            public function pagaImpuestos(){
                echo $this->nombre;
                if ($this->sueldo >3000){
                    echo "<p>debe pagar impuestos</p>";
                }else
                    echo "<p>no debe pagar impuestos</p>";
            }
            
            
            
        }
        $empleado1 = new Empleado("Juan",4000);
        $empleado2 = new Empleado("Mateo",2000);
        echo $empleado1 -> pagaImpuestos();
        echo $empleado2 -> pagaImpuestos();

        ?>
        </body>

</html>