<?php

namespace AppBundle\Controller;

use Entity\Lessons;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    public function listeCoursAction(Request $request){
        return $this->render('lessons/lessons.html.twig', [
            'lessons' => array("Anglais","Maths","Francais")
        ]);


    }

    public function detailsCoursAction(Request $request,int $id){
        $lessons1 = new Lessons(1, "Anglais","Cours sur les prépositions.");
        if($id > 100){
            throw new NotFoundHttpException();
        }
        if($id == 42){
            throw new AccessDeniedHttpException();
        }
        return $this->render('lessons/detailsLessons.html.twig', [
            'lessonsDetails' => array($lessons1->getNomCours()." : " . $lessons1->getDetails())
        ]);

    }

    public function aProposAction(Request $request,$langue){

        if($langue == "fr"){
            return $this->render('lessons/aPropos.html.twig', [
                'aPropos' => "Francais"
            ]);
        }else if($langue == "en"){
            return $this->render('lessons/aPropos.html.twig', [
                'aPropos' => "Anglais"
            ]);
        }

    }
}
