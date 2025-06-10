<html>
    <head>

        </head>

    <body>

        <?php
            class Cine{
                private $salas=array();

                public function add($sala){
                    $this->salas[]=$sala;
                }

                public function vender($nro,$cant){
                    try{
                    $this ->salas[($nro-1)]->ocuparButacas($cant);
                    }
                    catch(Exception $e){
                         $e->getMessage();
                    }
                }

                public function mostrarOcupacion(){
                    foreach($this->salas as $sala){
                        echo 'sala Nro: '.$sala->getNro()+1;
                        echo ' Butacas ocupadas: '.$sala->getButacasOcupadas().'<br>'; 

                    }

                }
            }

        ?>
        </body>

</html>