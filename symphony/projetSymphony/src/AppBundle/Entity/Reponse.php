<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 01/12/2017
 * Time: 12:18
 */

namespace Entity;


class Reponse
{
    private $typeDeReponse;
    private $reponse;

    /**
     * Reponse constructor.
     * @param $typeDeReponse
     * @param $reponse
     */
    public function __construct($typeDeReponse, $reponse)
    {
        $this->typeDeReponse = $typeDeReponse;
        $this->reponse = $reponse;
    }

    /**
     * @return mixed
     */
    public function getTypeDeReponse()
    {
        return $this->typeDeReponse;
    }

    /**
     * @param mixed $typeDeReponse
     */
    public function setTypeDeReponse($typeDeReponse)
    {
        $this->typeDeReponse = $typeDeReponse;
    }

    /**
     * @return mixed
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * @param mixed $reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;
    }

}