//<?php
//Partie 1
//echo 'Listing des images du repertoire miniatures <br />';
//foreach(scandir('../exercice1-partie3/images/') as $image) {
//    if ($image != "." && $image != "..") {
//        $f= '/images/'.$image;
//        echo "<img src='".$f."' style='width: 128px; height: 128px;'/>";
//    }
//}



for($i=1;$i<20;$i++){
    echo "<img src='https://placem.at/people?txt=Image
".$i."' style='width: 128px; height: 128px;'/>";
}


?>