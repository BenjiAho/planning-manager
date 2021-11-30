<?php
namespace App\Controller;
use App\Entity\Demandes;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function indexAction(Request $request) { return $this->render('homepage/homepage.html.twig', [
        'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        'controller_name' => 'DefaultController',
    ]);
    }
    /**
     * @Route("/api/colors", name="colors_route")
     */
    public function colorsAction()
    {
        return  new JsonResponse(array('colors' => ['red', 'green','blue', 'yellow'], "success" => true));
    }

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