<?php

namespace App\Controller;

use App\Entity\User;
use App\Services\GiftService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(GiftService $gifts)
    {
        /*$entityManager=$this->getDoctrine()->getManager();
        $user = new User;
        $user->setName("Adam");
        $user2 = new User;
        $user2->setName("Krzyskiek");
        $user3 = new User;
        $user3->setName("Jan");
        $user4 = new User;
        $user4->setName("Alojzy");

        $entityManager->persist($user);
        $entityManager->persist($user2);
        $entityManager->persist($user3);
        $entityManager->persist($user4);
        $entityManager->flush();*/

        $users=$this->getDoctrine()->getRepository(User::class)->findAll();

        $this->addFlash(
            'notice',
            'Your changes were saved'
        );




        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'users'=>$users,
                'random_gift'=>$gifts->gifts
        ]);
    }
}
