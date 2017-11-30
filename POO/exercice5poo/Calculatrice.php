<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 29/11/2017
 * Time: 20:26
 */

class Calculatrice
{
    public static function addition(float $nb1, float $nb2) {
                return $nb1 + $nb2;
     }

    public static function soustraction(float $nb1, float $nb2) {
            return $nb1 - $nb2;
    }

    public static function multiplication(float $nb1, float $nb2) {
            return $nb1 * $nb2;
     }

    public static function puissance(float $nb1, float $nb2) {
            return pow($nb1, $nb2);
     }

    public static function divisionReste(float $nb1, float $nb2) {
            return $nb1 % $nb2 ;
     }
}