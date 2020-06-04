<?php
namespace App\Controller;

use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;

class EnregistrementAController extends AbstractController
{


    /**
     * @Route("/Enregistrement", name="page.enregistrementA")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('page/enregistrementA.html.twig');
    }

}