<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\DataFixtures\ProjectFixtures;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Project;
use App\Entity\ProjectRepository;
use App\Entity\Task;

class TaskFixtures extends Fixture implements DependentFixtureInterface
{
    public const ADMIN_TASK_REFERENCE = 'admin-task';

    public function load(ObjectManager $manager)
    {
        // Sharing Objects between Fixtures
        $project = $this->getReference(ProjectFixtures::ADMIN_PROJECT_REFERENCE);

        for($i = 1; $i <= 10; $i ++ ){
            
            $task = new Task();
        
            $task->setTitle("Tâche n°$i")
                 ->setRegistered(new \DateTime())
                 ->setStatus("in progress")
                 ->setProjectId($project);

                $manager->persist($task);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            ProjectFixtures::class,
        );
    }
}
