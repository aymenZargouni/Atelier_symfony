<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScontrolerController extends AbstractController
{
    #[Route('/some/{a}/{b}', name: 'app_some')]
    public function somme($a,$b): Response
    {
        $c=$a+$b;
        return $this->render('Calcul\some.html.twig',[
            'a'=>$a,'b'=>$b, 'c'=>$c
        ]);
    }
    #[Route('/soustraction/{a}/{b}', name: 'app_soustraction')]
    public function soustraction($a,$b): Response
    {
        $c=$a-$b;
        return $this->render('Calcul\soustraction.html.twig',[
            'a'=>$a,'b'=>$b, 'c'=>$c
        ]);
    }
    #[Route('/accueil', name: 'app_accueil')]
    public function Accueil(): Response
    {
        return $this->render('Calcul\Accueil.html.twig',[
        ]);
    }
}
