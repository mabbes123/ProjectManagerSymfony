<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\DataFixtures\UserFixtures;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\User;
use App\Entity\UserRepository;

class ProjectFixtures extends Fixture implements DependentFixtureInterface
{
    public const ADMIN_PROJECT_REFERENCE = 'admin-project';

    public function load(ObjectManager $manager)
    {
        // Sharing Objects between Fixtures
        $user = $this->getReference(UserFixtures::ADMIN_USER_REFERENCE);

        for($i = 1; $i <= 10; $i ++ ){
            
            $project = new Project();
        
        $project->setTitle("Projet n°$i")
                ->setDescription("Lorem ipsum dolor sit amet consectetur adipisicing elit.")
                ->setRegistered(new \DateTime())
                ->setDeadline(new \DateTime())
                ->setUserId($user)
                ->setStatus("in progress");

                $manager->persist($project);
        }

        $manager->flush();
        $this->addReference(self::ADMIN_PROJECT_REFERENCE, $project);
    }

    public function getDependencies()
    {
        return array(
            UserFixtures::class,
        );
    }
}
