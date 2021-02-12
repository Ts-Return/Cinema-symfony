<?php

namespace App\DataFixtures;

use App\Entity\Acteurs;
use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();

        $Categories = new Categories();
        $Categories->setCategorie("Horreur");
        $manager->persist($Categories);


        $Categories2 = new Categories();
        $Categories2->setCategorie("Action");
        $manager->persist($Categories2);

        $Categories3 = new Categories();
        $Categories3->setCategorie("Comedie");
        $manager->persist($Categories3);

        $Acteurs = new Acteurs();
        $Acteurs->setActeur("Mark Hamill");
        $manager->persist($Acteurs);

        $Acteurs2 = new Acteurs();
        $Acteurs2->setActeur("Jacky Chan");
        $manager->persist($Acteurs2);

        $Acteurs3 = new Acteurs();
        $Acteurs3->setActeur("Jean-Claude Van Damne");
        $manager->persist($Acteurs3);
    }
}

