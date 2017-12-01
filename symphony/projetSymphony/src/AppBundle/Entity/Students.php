<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 01/12/2017
 * Time: 10:26
 */

namespace Entity;


class Students
{
    private $id;
    private $nomEtudiant;

    /**
     * Students constructor.
     * @param $id
     * @param $nomEtudiant
     */
    public function __construct($id, $nomEtudiant)
    {
        $this->id = $id;
        $this->nomEtudiant = $nomEtudiant;
    }

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
    public function getNomEtudiant()
    {
        return $this->nomEtudiant;
    }

    /**
     * @param mixed $nomEtudiant
     */
    public function setNomEtudiant($nomEtudiant)
    {
        $this->nomEtudiant = $nomEtudiant;
    }

}