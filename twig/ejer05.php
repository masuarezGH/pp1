<?php
            require_once ('./vendor/autoload.php');
            $loader = new \Twig\Loader\FilesystemLoader('.\templates');
            $twig = new \Twig\Environment($loader);
            echo $twig->render('eje05.html.twig', ['nombre' => $_GET['name'],'numero' => $_GET['num']]);
        ?>