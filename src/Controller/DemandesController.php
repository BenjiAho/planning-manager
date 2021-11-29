<?php

namespace App\Controller;

use App\Entity\Demandes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandesController extends AbstractController
{
    /**
     * @Route("/demandes/", name="demandes")
     */
    public function allDemandes(): Response
    {
        $demandes = $this->getDoctrine()
            ->getRepository(Demandes::class)
            ->findAll();

        return $this->render('demandes/demandes_liste.html.twig', ['demandes' => $demandes]);
    }
}