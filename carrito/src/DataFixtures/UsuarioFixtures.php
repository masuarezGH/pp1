<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UsuarioFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <=5; $i++) {
        $user = new User();
        $user->setNombre('Usuario '.$i);   
        $user->setEmail('Usuario'.$i.'@gmail.com');
        $user->setPassword('$2y$13$ApVYcVtdJv94iota19Ft6.88ygQUQ7C3E9p8DfGEAvscu3WRUxA4y');
        $manager->persist($user);
        }  
        $manager->flush();
    }
}
