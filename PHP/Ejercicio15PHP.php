<html>
    <head>

        </head>

    <body>

        <?php
            include('Cine.php');
            include('Salas.php');
            $cine = new Cine();
            $sala1 = new Sala(0,50);
            $sala2 = new Sala(1,30);
            $sala3 = new Sala(2,40);
            $cine->add($sala1);
            $cine->add($sala2);
            $cine->add($sala3);
            for($i=0;$i<=100;$i++){
                $nro=rand(1,3);
                $cant=rand(1,2);
                $cine->vender($nro,$cant);
            }
            $cine->mostrarOcupacion();
        ?>
        </body>

</html>