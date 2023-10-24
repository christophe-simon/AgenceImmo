<?php

// namespace App\DataFixtures;

// use App\Entity\User;
// use Doctrine\Bundle\FixturesBundle\Fixture;
// use Doctrine\Persistence\ObjectManager;
// use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

// class UserFixture extends Fixture
// {
//     private $passwordEncoder;

//     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
//     {
//         $this->passwordEncoder = $passwordEncoder;
//     }

//     public function load(ObjectManager $manager)
//     {
//         $roleUser = $manager->getRepository(Role::class)->findOneBy(['name' => 'ROLE_USER']);
//         $roleAgent = $manager->getRepository(Role::class)->findOneBy(['name' => 'ROLE_AGENT']);
//         $roleAdmin = $manager->getRepository(Role::class)->findOneBy(['name' => 'ROLE_ADMIN']);
        
//         $user = new User();
//         $user->setUsername('admin');
//         $user->setFirstname('John');
//         $user->setLastname('Doe');

//         $password = $this->passwordEncoder->encodePassword($user, 'admin');
//         $user->setPassword($password);
        
//         $user->addRole($roleUser);
//         $user->addRole($roleAgent);
//         $user->addRole($roleAdmin);
        
//         $manager->persist($user);
//         $manager->flush();
//     }
// }