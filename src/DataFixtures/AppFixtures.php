<?php

namespace App\DataFixtures;

use App\Entity\MicroPost;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $microPost1= new MicroPost();
       $microPost1->setTitle('Welcome!');
       $microPost1->setText('testtext');
       $microPost1->setCreated(new DateTime());
    $manager->persist($microPost1);

    $microPost2= new MicroPost();
       $microPost2->setTitle('Welcome 2!');
       $microPost2->setText('testtext2 ');
       $microPost2->setCreated(new DateTime());
    $manager->persist($microPost2);

        $manager->flush();
    }
}
