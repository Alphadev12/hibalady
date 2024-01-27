<?php

namespace App\Controller;

use App\Entity\Destination;
use App\Repository\DestinationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DestinationController extends AbstractController
{
    #[Route('/destination/{id}', name: 'destination.show')]
    public function index(Destination $destination): Response
    {
        return $this->render('destination/index.html.twig', [
            'destination' => $destination,
        ]);
    }
}
