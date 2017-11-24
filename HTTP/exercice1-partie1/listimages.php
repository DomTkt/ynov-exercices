//<?php

//Partie 1
//echo 'Listing des images du repertoire miniatures <br />';
//foreach(scandir('../exercice1-partie3/images/') as $image) {
//    if ($image != "." && $image != "..") {
//        $f= '/images/'.$image;
//        echo "<img src='".$f."' style='width: 128px; height: 128px;'/>";
//    }
//}



//for($i=1;$i<20;$i++){
//    echo "<img src='https://placem.at/people?txt=Image
//".$i."' style='width: 128px; height: 128px;'/>";
//}


//$f = '../exercice1-partie3/images/' . $image;
//$imageRes = new ImageResize($f);
//$imageRes->scale(50);
//$imageRes->save('../exercice1-partie3/tmp/'.$image);

use \Eventviva\ImageResize;

require_once './vendor/autoload.php';
include './vendor/eventviva/php-image-resize/lib/ImageResize.php';
$imageRes = new ImageResize("./images/people.jpg");
//$imageRes->resize(500,500,true);
//$imageRes->save('./tmp/'.$imageRes);
echo "<img src=./tmp" . $imageRes;



//foreach(scandir('../exercice1-partie3/images/') as $image) {
//    if ($image != "." && $image != "..") {
//        $f = '/images/' . $image;
//$imageRes = new ImageResize("./images/people.jpg");
//$imageRes->resize(500,500,true);
//$imageRes->save('../exercice1-partie1/tmp/'.$image);
//echo "<img src=./tmp/" . $imageRes;
//    }

//}

?>