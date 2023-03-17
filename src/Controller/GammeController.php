<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GammeController extends AbstractController
{

    #[Route('/gamme', name: 'Lister_gamme')]
    public function Lister(): Response
    {
        $Gamme = ['Ordinateur','vidéoprojecteur','Imprimante','accessoire'];
        return $this->render('gamme/Lister.html.twig',['tab'=>$Gamme]);

    }
}
