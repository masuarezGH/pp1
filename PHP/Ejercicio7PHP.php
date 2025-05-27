<html>
    <head>
</head>
<body>
    <?php 
    function volumenCilindro($radio,$altura){
        $volumen= 3.1416*$radio*$radio*$altura;
        return $volumen;
    }
    echo volumenCilindro(4,3);
    ?>
    </body>
</html>
    