<?php
/**
 * Created by PhpStorm.
 * User: passh
 * Date: 28/5/17
 * Time: 9:12
 */

namespace pcc\WeatherBundle;


use Symfony\Component\Config\Definition\Exception\Exception;

class OpenWeatherMapUriBuilder
{
    CONST URL = "api.openweathermap.org/data/2.5/weather?q=";

    private $uri;

    private $apikey;

    /**
     * @return mixed
     */
    public function getApikey()
    {
        return $this->apikey;
    }

    /**
     * @param mixed $apikey
     * @return OpenWeatherMapUriBuilder
     */
    public function setApikey($apikey)
    {
        if (null === $apikey){
            throw new Exception('WeatherBundle:OpenWeatherMapUriBuilder:setApikey(null)');
        }
        $this->apikey = $apikey;

        return $this;
    }
    private $ciudad;
    private $countryCode = 'es';//default spain.


    //{$ciudad},es&APPID={$this->apiKey}";

    function __construct()
    {
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUri()
    {
        $this->uri = self::URL;

        //S0lo si tenemos todos los setters podemos devolver una uri válida.
        if(null === $this->getCiudad()) {
            throw new Exception('Calling OpenWeatherMapUriBuilder:getUri() before setCity() ');
        }
        if(null === $this->getCountryCode()) {
            throw new Exception('Calling OpenWeatherMapUriBuilder:getUri() before setCountryCode() ');
        }
        if(null === $this->getApikey()) {
            throw new Exception('Calling OpenWeatherMapUriBuilder:getUri() before setApikey() ');
        }

        //Generámos la URI POSICIONALMENTE
        $this->uri = "api.openweathermap.org/data/2.5/weather?q={$this->getCiudad()},{$this->getCountryCode()}&APPID={$this->getApikey()}";

        return $this->uri;
    }

    /**
     * @param mixed $uri
     * @return OpenWeatherMapUriBuilder
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * @param mixed $ciudad
     * @return OpenWeatherMapUriBuilder
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return OpenWeatherMapUriBuilder
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }


}