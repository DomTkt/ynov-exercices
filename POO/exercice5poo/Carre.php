<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 24/11/2017
 * Time: 16:22
 */

class Carre implements IForme
{
    private $cote;

    /**
     * Carre constructor.
     * @param $cote
     */
    public function __construct($cote)
    {
        $this->cote = $cote;
    }

    /**
     * @return mixed
     */
    public function getCote()
    {
        return $this->cote;
    }

    /**
     * @param mixed $cote
     */
    public function setCote($cote)
    {
        $this->cote = $cote;
    }


    public function getArea()
    {
        return pow($this->cote,2);
    }

    public function getPerimeter()
    {
        return 4*$this->cote;
    }
}