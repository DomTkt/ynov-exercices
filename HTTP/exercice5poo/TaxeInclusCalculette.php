<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 29/11/2017
 * Time: 20:35
 */

class TaxeInclusCalculette extends Calculatrice
 {
       private $taxRate;

     public function __construct($taxRate)
     {
                $this->taxRate = $taxRate;
     }

     public function taxeAddition(float $nb1, float $nb2) {
                $resultatDeBase = Calculatrice::addition($nb1, $nb2);
                $taxe = $resultatDeBase / $this->taxRate;
                $resAvecTaxe = $resultatDeBase + $taxe;
                return ' Addition Taxe : ' . $this->taxRate . '% => : ' . $resAvecTaxe;
     }

     public function taxeSoustraction(float $nb1, float $nb2) {
                $resultatDeBase = Calculatrice::soustraction($nb1, $nb2);
                $taxe = $resultatDeBase / $this->taxRate;
                $resAvecTaxe = $resultatDeBase + $taxe;
                return ' Soustraction Taxe : ' . $this->taxRate . '% => : ' . $resAvecTaxe;
     }

     public function taxeMultiplication(float $nb1, float $nb2) {
                $resultatDeBase = Calculatrice::multiplication($nb1, $nb2);
                $taxe = $resultatDeBase / $this->taxRate;
                $resAvecTaxe = $resultatDeBase + $taxe;
                return 'Multiplication Taxe : ' . $this->taxRate . '% => : ' . $resAvecTaxe;
     }

     public function taxePuissance(float $nb1, float $nb2) {
                $resultatDeBase = Calculatrice::puissance($nb1, $nb2);
                $taxe = $resultatDeBase / $this->taxRate;
                $resAvecTaxe = $resultatDeBase + $taxe;
                return ' Puissance Taxe : ' . $this->taxRate . '% => : ' . $resAvecTaxe;
     }

     public function taxeResteDeDivision(float $nb1, float $nb2) {
                $resultatDeBase = Calculatrice::divisionReste($nb1, $nb2);
                $taxe = $resultatDeBase / $this->taxRate;
                $resAvecTaxe = $resultatDeBase + $taxe;
                return ' Division Taxe : ' . $this->taxRate . '% => : ' . $resAvecTaxe;
     }

    public function __call($name, $arguments)
    {
        echo 'Désolé la fonction (' . $name . ') est indisponible pour le moment.';
    }



}