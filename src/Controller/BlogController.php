<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\taxesService\calcul;

class BlogController extends AbstractController
{

    #[Route('/blog', name: 'app_blog')]
    public function index(calcul $obj): Response
    {
        $pu=100;
        $tva=0.2;
        $mtva = $obj->calculMontantTva($pu,$tva);
        $mttc = $obj->montantTTC($pu,$tva);
        return new Response ("<h1>le montant tva est $mtva <br>le montant TTC est $mttc</h1>");
    }
    #[Route('/blog/{id<\d>}/{name?vide}', name: 'detail_blog' )]
    public function detail($id,$name): Response
    {
        return $this->render('blog/detail.html.twig',['id'=>$id,'name'=>$name]);
    }
    #[Route('/blog/{id}/{name}', name: 'detail2_blog' )]
    public function detail2($id,$name): Response
    {
        return new Response ("l'article $name a l'identifiant $id");
            
    }
    #[Route('/blog/test', name: 'test_blog' )]
    public function someMethod(): Response
    {
        $url = $this->generateUrl('detail2_blog' , ['id'=>100,'name'=>'Symfony']);
        return $this->redirect($url);      
    }
    
}
