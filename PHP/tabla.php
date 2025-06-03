<html>
    <head>

        </head>

    <body>

        <?php
        echo "<table border='4' cellpadding='5' cellspacing='0'>";
            class Tabla {
                private $tabla= array();
                public function add($celda){
                    
                    $this->tabla[]=$celda;
                }
                public function mostrarCeldas(){
                    for($i=0;$i<=9;$i++){
                        echo "<tr>";
                        echo "<td>Celda Numero ".$this->tabla[$i]->getNro();
                        echo $this->tabla[$i]->getTexto()." ".$this->tabla[$i]->getNro()."</td>";
                    }
                }
            }
            
        ?>
        </body>

</html>