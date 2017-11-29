<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 29/11/2017
 * Time: 21:33
 */

trait Nommable
{
    private $name;

    /**
     * Nommable constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


}