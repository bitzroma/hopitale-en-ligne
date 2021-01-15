<?php

namespace App\DataFixtures;
use App\Entity\Admin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    
 
    
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        
 
        $user = new Admin();
        $roles[] = 'ROLE_ADMIN';
        $user->setEmail('admin@gmail.com')
             ->setRoles($roles)
             ->setPassword('password');
        $manager->persist($user);
        $manager->flush();
    }

        
    }

