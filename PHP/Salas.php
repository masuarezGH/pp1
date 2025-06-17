<html>
    <head>

        </head>

    <body>

        <?php
            class Sala{
                private $nro;
                private $cantidadButacas;
                private $butacasOcupadas;

                public function __construct($nro,$cantidadButacas){
                    $this->nro = $nro;
                    $this->cantidadButacas=$cantidadButacas;
                    $this->butacasOcupadas=0;
                }

                public function ocuparButacas($cant){
                    if(($this->butacasOcupadas+$cant)<=$this->cantidadButacas){
                        $this->butacasOcupadas = $this->butacasOcupadas + $cant; 
                      
                    }else{
                        throw new Exception('Todas las butacas fueron vendidas');
                    }    
                }

                public function getNro(){
                    return $this->nro;
                }

                public function getCantidadButacas(){
                    return $this->cantidadButacas;
                }

                public function getButacasOcupadas(){
                    return $this->butacasOcupadas;
                }
            }

        ?>
        </body>

</html>