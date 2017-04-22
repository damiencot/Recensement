<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Recensement\RecensementBundle\Entity\Habitants;
use Recensement\RecensementBundle\Entity\Parents;

class HabitantsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $parent1 = new Parents();
        $parent1->setNom('Jean');
        $parent1->setPrenom('Jesquin');
        $parent1->setDateNaissance(new \DateTime());
        $parent1->setSexe('1');
        $manager->persist($parent1);

        $parent2 = new Parents();
        $parent2->setNom('Michelle');
        $parent2->setPrenom('Jesquin');
        $parent2->setDateNaissance(new \DateTime());
        $parent2->setSexe('0');
        $manager->persist($parent2);

        $habitant1 = new Habitants();
        $habitant1->setNom('Marc');
        $habitant1->setPrenom('Jesquin');
        $habitant1->setSexe('1');
        $habitant1->setDateNaissance(new \DateTime());
        $habitant1->setTelephone('0600000000');
        $habitant1->setAdresse('3 rue alberta rubosca');
        $habitant1->setZone('NORD');
        $habitant1->setParents1($parent1);
        $habitant1->setParents2($parent2);
        $manager->persist($habitant1);



        $manager->flush();


    }

    public function getOrder()
    {
        return 1;
    }
}