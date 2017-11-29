<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 29/11/2017
 * Time: 21:23
 */

trait Geolocalisable
{
    private $latitude;
    private $longitude;

    /**
     * Geolocalisable constructor.
     * @param $latitude
     * @param $longitude
     */
    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }


    public function locate(){
        return "Latitude : ".$this->latitude . "et Longitude : " . $this->longitude;
    }

}