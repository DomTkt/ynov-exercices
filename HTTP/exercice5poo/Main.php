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


$triangle1 = new Triangle(5,5,10);
$triangle2 = new Triangle(5,5,5);
$triangle3 = new Triangle(6,3,2);
$triangle4 = new Triangle(3,4, 5);

echo "Triangle 1 = ".$triangle1->isIso();
echo "Triangle 2 = ".$triangle2->isEqui();
echo "Triangle 3 = ".$triangle3->isScalene();
echo "Triangle 4 = ".$triangle4->isRect();

$carre1 = new Carre(4,4);
$rectangle1 = new Rectangle(5,8);

$RF = new ResultForm();
$resultatAire = $RF->additionAire($carre1,$rectangle1);
echo "L'aire est : ".$resultatAire;

$resultatPerimetre = $RF->additionPerimetre($carre1,$rectangle1);
echo "Le perimetre est :". $resultatPerimetre;







