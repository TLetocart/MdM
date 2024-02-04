<?php

namespace App\Controller;

use App\Entity\Materiel;
use App\Repository\MaterielRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaterielController extends AbstractController
{
    #[Route('/materiel', name: 'app_materiel')]
    public function index(MaterielRepository $materielRepository): Response
    {
        $materiels = $materielRepository->findAll();

        return $this->render('materiel/index.html.twig', [
            'materiels' => $materiels,
        ]);
    }
}
