<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use app\Entity\Producto;
class ProductoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <=10; $i++) {
        $producto = new Producto();
        $producto->setNombre('producto '.$i);
        $producto->setDescripcion('este es el producto numero '.$i);
        $producto->setPrecio(mt_rand(10, 100));
        $producto->setImagen('images/producto'.$i.'.jpg');
        $manager->persist($producto);
        }  
        $manager->flush();
    }
}
