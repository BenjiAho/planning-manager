<?php

namespace App\Controller;

use App\Entity\Demandes;
use App\Form\Type\DemandesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class DemandesController extends AbstractController
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

        return new Response('Check out this great product: '.$product->getName());

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }
}