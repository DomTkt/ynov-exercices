<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 01/12/2017
 * Time: 14:25
 */
namespace AppBundle\Service;

class Service8Ball
{

    public function generateQuestionActionService()
    {
        $reponseChoisis = null;
        $nbTypeDeReponse = 3;
        $tabReponseAffirmatives = array("D'après moi oui", "C'est certain","Oui absolument");
        $tabReponseEvasives =  array("Essaye plus tard","Pas d'avis","Repose ta question");
        $tabReponseNegatives = array("C'est non","Peu probable","Faut pas rêver");
        $nbAleatoire = rand(1,$nbTypeDeReponse);

        if($nbAleatoire==1) {
            $nbAleatoireReponse = rand(1, sizeof($tabReponseAffirmatives));
            for ($var = 1; $var < sizeof($tabReponseAffirmatives); $var++) {
                if ($nbAleatoireReponse == $var) {
                    $reponseChoisis = $tabReponseAffirmatives[$nbAleatoireReponse];
                }
            }
        }

        else if($nbAleatoire==2) {
            $nbAleatoireReponse = rand(1, sizeof($tabReponseEvasives));
            for ($var = 1; $var < sizeof($tabReponseEvasives); $var++) {
                if ($nbAleatoireReponse == $var) {
                    $reponseChoisis = $tabReponseEvasives[$nbAleatoireReponse];
                }
            }
        }


        else if($nbAleatoire==3) {
            $nbAleatoireReponse = rand(1, sizeof($tabReponseNegatives));
            for ($var = 1; $var < sizeof($tabReponseNegatives); $var++) {
                if ($nbAleatoireReponse == $var) {
                    $reponseChoisis = $tabReponseNegatives[$nbAleatoireReponse];
                }
            }
        }

//        return $this->render('AppBundle:Magic8Ball:generate_question.html.twig', [
//            'reponse' => $reponseChoisis, 'question' => $question
//        ]);
        return $reponseChoisis;

//        }
//        $reponseAffirmatives = new Reponse("Affirmatives", $tabReponseAffirmatives);
//        $reponseEvasives = new Reponse("Evasives", $tabReponseEvasives);
//        $reponseNegatives = new Reponse("Negatives", $tabReponseNegatives);

    }

}