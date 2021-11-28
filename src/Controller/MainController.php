<?php

namespace App\Controller;

use App\Entity\Demandes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class MainController extends AbstractController
{
    public function showDemandes(int $id): Response
    {
        $product = $this->getDoctrine()
            ->getRepository(Demandes::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return new Response('nom expéditeur: '.$product->getExpediteur());

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }

}