<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 24/11/2017
 * Time: 14:30
 */

require_once('Triangle.php');
require_once('Rectangle.php');
require_once('Carre.php');
require_once('ResultForm.php');
require_once('IForme.php');
require_once('Calculatrice.php');
require_once('TaxeInclusCalculette.php');


$triangle1 = new Triangle(5,5,10);
$triangle2 = new Triangle(5,5,5);
$triangle3 = new Triangle(6,3,2);
$triangle4 = new Triangle(3,4, 5);

echo "Triangle 1 = ".$triangle1->isIso();
echo '<br>';
echo "Triangle 2 = ".$triangle2->isEqui();
echo '<br>';
echo "Triangle 3 = ".$triangle3->isScalene();
echo '<br>';
echo "Triangle 4 = ".$triangle4->isRect();
echo '<br>';

$carre1 = new Carre(4,4);
$rectangle1 = new Rectangle(5,8);

$RF = new ResultForm();
$resultatAire = $RF->additionAire($carre1,$rectangle1);
echo "L'aire est : ".$resultatAire;
echo '<br>';


$resultatPerimetre = $RF->additionPerimetre($carre1,$rectangle1);
echo "Le perimetre est :". $resultatPerimetre;
echo '<br>';
echo '<br>';
echo 'Exercice calculatrice';
echo '<br>';
echo '<br>';

echo 'Addition : ' . Calculatrice::addition(10,20);
echo '<br>';
echo 'Soustraction : ' . Calculatrice::soustraction(10,20);
echo '<br>';
echo 'Multiplication : ' . Calculatrice::multiplication(10,20);
echo '<br>';
echo 'Puissance : ' . Calculatrice::puissance(10,20);
echo '<br>';
echo 'Reste division : ' . Calculatrice::divisionReste(10,20);
echo '<br>';
echo '<br>';
echo 'Avec taxe';
echo '<br>';
echo '<br>';
$taxe = new TaxeInclusCalculette(10);

echo $taxe->taxeAddition(10, 20);
echo '<br>';
echo $taxe->taxeSoustraction(10, 20);
echo '<br>';
echo $taxe->taxeMultiplication(10, 20);
echo '<br>';
echo $taxe->taxePuissance(10, 20);
echo '<br>';
echo $taxe->taxeResteDeDivision(10, 20);
echo '<br>';
echo $taxe->modulo(10, 12);







