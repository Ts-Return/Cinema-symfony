<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class Controllerfilm extends AbstractController
{
    public function getCategorie(CategoriesRepository $CategoriesRepository): Response
    {

        $Categories = $CategoriesRepository->findAll();

        return $this->render('index.html.twig', [
            'categories' => $Categories
        ]);
    }
}
