<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {

        return $this->render('homepage/index.html.twig', [

            ]);
    }

    /**
     * @Route("/admin", name="admin_route")
     */
    public function admin()
    {

        return $this->render('test.html.twig', [

            ]);
    }



}