<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Utilisateur admin
        $admin = new Users();
        $admin->setEmail('admin@example.com');
        $admin->setRoles(['ROLE_USER','ROLE_ADMIN']);
        $admin->setNombreCouvert(2);
        $admin->setAllergie('Aucune');
        $admin->setPassword(
            $this->passwordHasher->hashPassword($admin, 'admin134')
        );
        $manager->persist($admin);

        // Utilisateur normal 2
        $Users2 = new Users();
        $Users2->setEmail('utilisateur2@example.com');
        $Users2->setRoles(['ROLE_USER']);
        $Users2->setNombreCouvert(4);
        $Users2->setAllergie('Gluten');
        $Users2->setPassword(
            $this->passwordHasher->hashPassword($Users2, 'motdepasse2')
        );
        $manager->persist($Users2);

        // Utilisateur normal 3
        $Users3 = new Users();
        $Users3->setEmail('utilisateur3@example.com');
        $Users3->setRoles(['ROLE_USER']);
        $Users3->setNombreCouvert(6);
        $Users3->setAllergie('Lactose');
        $Users3->setPassword(
            $this->passwordHasher->hashPassword($Users3, 'motdepasse3')
        );
        $manager->persist($Users3);

        $manager->flush();
    }
}
