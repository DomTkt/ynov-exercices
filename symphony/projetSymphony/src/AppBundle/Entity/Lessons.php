<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 30/11/2017
 * Time: 17:08
 */

namespace Entity;

class Lessons
{
    private $id;
    private $nomCours;
    private $details;

    /**
     * Lessons constructor.
     * @param $id
     * @param $nomCours
     * @param $details
     */
    public function __construct($id, $nomCours, $details)
    {
        $this->id = $id;
        $this->nomCours = $nomCours;
        $this->details = $details;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }

    /**
     * Lessons constructor.
     * @param $id
     * @param $nomCours
     */


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomCours()
    {
        return $this->nomCours;
    }

    /**
     * @param mixed $nomCours
     */
    public function setNomCours($nomCours)
    {
        $this->nomCours = $nomCours;
    }



}