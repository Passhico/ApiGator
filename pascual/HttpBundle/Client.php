<?php
/**
 * Created by PhpStorm.
 * User: passh
 * Date: 25/5/17
 * Time: 10:32
 */

namespace pascual\HttpBundle;


use ApiGator\ApiGator;

class Client
{
    private $apigator;
    const APIKEY = '18a7c380835ade989f795f3298ab2b09';

    function __construct()
    {
        $this->apigator = new ApiGator();
    }

    public function get($uri)
    {
        $this->apigator->setUri($uri);
        return $this->apigator->getCurlResponse();
    }

    public function getMeasuresByCitieName($name)
    {
        $uri = 'api.openweathermap.org/data/2.5/weather?q=' . $name;
        $uri .= '&APPID=' . self::APIKEY;

        $this->apigator->setUri($uri);

        $measures = $this->apigator->getCurlResponse();

        return $measures;

    }

}