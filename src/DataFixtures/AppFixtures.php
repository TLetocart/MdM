<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;
use App\Entity\Materiel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /** 
     * @var Generator
     */

    private Generator $faker;
    
    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i <= 20 ; $i++) {
            $materiel = new Materiel();
            $prixht = mt_rand(1.0, 50.0);
            $tva = 0.20;
            $prixttc = $prixht * (1 + $tva);
            $quantite = mt_rand(0, 10);

            $materiel->setNom($this->faker->word())
                ->setPrixht($prixht)
                ->setTVA($tva)
                ->setPrixTtc($prixttc)
                ->setQuantite($quantite);

            $manager->persist($materiel);
        }
    

        $manager->flush();
    }
}
