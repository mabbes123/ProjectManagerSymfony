<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;
    public const ADMIN_USER_REFERENCE = 'admin-user';

// password encoder service
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user= new User();
        $user->setPseudo('root');
        $user->setPassword($this->passwordEncoder->encodePassword($user,'root'));

        $manager->persist($user);
        $manager->flush();

        $this->addReference(self::ADMIN_USER_REFERENCE, $user);
    }
}
