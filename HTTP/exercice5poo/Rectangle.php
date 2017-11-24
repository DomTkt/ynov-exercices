<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 24/11/2017
 * Time: 16:24
 */


class Rectangle implements IForme
{
    private $largeur;
    private $longueur;

    /**
     * Rectangle constructor.
     * @param $largeur
     * @param $longueur
     */
    public function __construct($largeur, $longueur)
    {
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @param mixed $largeur
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * @param mixed $longueur
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }


    public function getArea()
    {
        return $this->longueur*$this->largeur;
    }

    public function getPerimeter()
    {
        return ($this->longueur+$this->largeur)*2;
    }
}