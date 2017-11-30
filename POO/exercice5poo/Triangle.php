<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 24/11/2017
 * Time: 13:45
 */

require('IForme.php');

class Triangle implements IForme
{
    private $c1;
    private $c2;
    private $c3;

    /**
     * Triangle constructor.
     * @param $c1
     * @param $c2
     * @param $c3
     */
    public function __construct($c1, $c2, $c3)
    {
        $this->c1 = $c1;
        $this->c2 = $c2;
        $this->c3 = $c3;
    }

    /**
     * @return mixed
     */
    public function getC1()
    {
        return $this->c1;
    }

    /**
     * @param mixed $c1
     */
    public function setC1($c1)
    {
        $this->c1 = $c1;
    }

    /**
     * @return mixed
     */
    public function getC2()
    {
        return $this->c2;
    }

    /**
     * @param mixed $c2
     */
    public function setC2($c2)
    {
        $this->c2 = $c2;
    }

    /**
     * @return mixed
     */
    public function getC3()
    {
        return $this->c3;
    }

    /**
     * @param mixed $c3
     */
    public function setC3($c3)
    {
        $this->c3 = $c3;
    }

    public function isIso()
    {
        if ($this->c1 == $this->c2 || $this->c1 == $this->c3 || $this->c2 == $this->c3) {
            return true;
        }
    }

    public function isEqui()
    {
        if ($this->c1 == $this->c2 && $this->c1 == $this->c3) {
            return true;
        }
    }

    public function isRect()
    {
        $theHigherC = 0;
        $theC2 = 0;
        $theC3 = 0;

        if ($this->c1 > $this->c2 && $this->c1 > $this->c3) {
            $theHigherC = $this->c1;
            $theC2 = $this->c2;
            $theC3 = $this->c3;
            if (pow($theHigherC, 2) == pow($theC2, 2) + pow($theC3, 2)) {
                return true;
            }else{
                return false;
            }
        } else if ($this->c2 > $this->c1 && $this->c2 > $this->c3) {
            $theHigherC = $this->c2;
            $theC2 = $this->c1;
            $theC3 = $this->c3;
            if (pow($theHigherC, 2) == pow($theC2, 2) + pow($theC3, 2)) {
                return true;
            }
            else{
                return false;
            }
        } else if ($this->c3 > $this->c1 && $this->c3 > $this->c2) {
            $theHigherC = $this->c3;
            $theC2 = $this->c1;
            $theC3 = $this->c2;
            if (pow($theHigherC, 2) == pow($theC2, 2) + pow($theC3, 2)) {
                return true;
            }
            else{
                return false;
            }
        }

//      $array = array($this->c1, $this->c2, $this->c3);
//      foreach ($array as $value) {
//          if ($value > $theHigherC) {
//              $theHigherC = $value;*


//
//          if(pow($theHigherC,2) ==
//

  }

  public function isScalene(){
      if(($this->c1 != $this->c2 && $this->c1 != $this->c3)|| ($this->c2 != $this->c1 && $this->c2 != $this->c3) || ($this->c3 != $this->c1 && $this->c3 != $this->c2)){

        return true;
      }else{
          return "je ne suis pas scalene";
      }
    }

    public function getArea()
    {


    }

    public function getPerimeter()
    {

    }
}