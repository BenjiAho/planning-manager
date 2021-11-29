<?php

namespace App\Controller;

use App\Entity\Hotesses;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HotessesController extends AbstractController
{
    /**
     * @Route("/hotesses/", name="hotesses")
     */
    public function allHotesses(): Response
    {
        $hotesses = $this->getDoctrine()
            ->getRepository(Hotesses::class)
            ->findAll();

            return $this->render('hotesses/hotesses_liste.html.twig', ['hotesses' => $hotesses]);
    }
}
