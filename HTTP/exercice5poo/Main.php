<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 24/11/2017
 * Time: 14:30
 */

require('Triangle.php');

$triangle1 = new Triangle(5,5,10);
$triangle2 = new Triangle(5,5,5);
$triangle3 = new Triangle(5,6,7);
$triangle4 = new Triangle(3,4, 5);

echo "Triangle 1 = ".$triangle1->isIso();
echo "Triangle 2 = ".$triangle2->isEqui();
echo "Triangle 3 = ".$triangle3->isScalene();
echo "Triangle 4 = ".$triangle4->isRect();



