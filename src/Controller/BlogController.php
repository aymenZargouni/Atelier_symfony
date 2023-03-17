<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return new Response ("Welcome");
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
