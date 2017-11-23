<?php

echo 'Listing des images du repertoire miniatures <br />';
foreach(scandir('../exercice1-partie3/images/') as $image) {
    if ($image != "." && $image != "..") {
        $f= '/images/'.$image;
        echo "<img src='".$f."' style='width: 128px; height: 128px;'/>";
    }
}
?>