<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 24/11/2017
 * Time: 15:16
 */


class ResultForm
{
    function additionAire(IForme $iforme, IForme $iforme2){
    return $iforme->getArea() + $iforme2->getArea();
}

    function additionPerimetre(IForme $iforme, IForme $iforme2){
        return $iforme->getPerimeter() + $iforme2->getPerimeter();
    }


}