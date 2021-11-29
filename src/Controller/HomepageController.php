<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class HomepageController
{
    public function getHomepage(): Response
    {
        return render('homepage/homepage.html.twig');
    }
}