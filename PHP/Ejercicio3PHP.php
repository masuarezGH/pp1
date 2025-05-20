<html>
<head>
</head>
<body>
    <?php
    $pais = [
        "españa"=>[
            "nombre"=> "España",
            "lengua"=> "castellano",
            "moneda"=> "euro",
        ],
        "francia" => [
            "nombre"=> "Francia",
            "lengua"=> "frances",
            "moneda"=> "euro",
        ],
        "usa"=> [
            "nombre"=> "Estados Unidos",
            "lengua"=> "ingles",
            "moneda"=> "dolar",
        ],
    ];
    echo $pais["españa"] ["moneda"];
    ?>
    </body>
</html>
