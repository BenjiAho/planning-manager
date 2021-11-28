<?php

namespace App\Controller;

use App\Entity\Demandes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemandesController extends AbstractController
{
    /**
     * @Route("/demandes/{id}", name="demandes")
     */
    public function createProduct(int $ID): Response
    {
        $demandes = $this->getDoctrine()
            ->getRepository(Demandes::class)
            ->find($ID);

        if (!$demandes) {
            throw $this->createNotFoundException(
                'No product found for id '.$ID
            );
        }

//        return new Response('Check out this great product: '.$demandes->getName());

        // or render a template
        // in the template, print things with {{ product.name }}
         return $this->render('demandes/index.html.twig', ['demandes' => $demandes]);
    }
}
