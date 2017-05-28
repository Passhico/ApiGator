<?php
/**
 * Created by PhpStorm.
 * User: passh
 * Date: 27/5/17
 * Time: 11:17
 */

namespace pcc\WeatherBundle;

use pcc\WeatherBundle\Exceptions\WeatherProviderApiExceptionGetCelsiusOfNullCity;

use pcc\ApigatorBundle\ApiGator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class WeatherProviderAPI extends Controller implements WeatherProviderInterface
{
    private $apigator;//el servicio...

    //todo: quitar esta constante usar sólo parametro __construct
    const APIKEY = '18a7c380835ade989f795f3298ab2b09';
    private $apiKey;//si no se pasa parámetro, es la const eliminar este comentario cuando se haga el todo.

    function __construct()
    {


            $this->apiKey = self::APIKEY;

            //todo: preguntar esto
        //$this->apigator = $this->get('pcc_apigator.apigator');
        $this->apigator = new ApiGator();
    }

    public function getMeasuresBycity($ciudad = 'Alhama de Murcia')
    {

        //uri posicional.
        // $URI = "api.openweathermap.org/data/2.5/weather?q={$ciudad},es&APPID={$this->apiKey}";

        $uribuilder = new OpenWeatherMapUriBuilder();
        $URI = $uribuilder->setApikey($this->apiKey)->setCiudad('Librilla')->getUri();



       // $this->apigator->setCurrentUri($URI)->procesaResponseCon('dump');//elegant.
        return $arrResponse = $this->apigator->setCurrentUri($URI)->getArrayResponse();    //default.
    }

    /**
     * @param $ciudad
     * @return float
     * @throws WeatherProviderApiExceptionGetCelsiusOfNullCity
     */
    public function getCelsiusByCity($ciudad)
    {
        if(null === $ciudad)
        {
            throw new WeatherProviderApiExceptionGetCelsiusOfNullCity('getCelsiusByCity(NULL)');
        }

        $arrResponse = $this->getMeasuresBycity($ciudad);

        try{
            $temperaturaActual =  $arrResponse['main']['temp'] - (float)273.15;

        } catch (\Exception $exception)
        {
            $temperaturaActual = "esta response no tiene datos de temperatura correctos";
        }


        return $temperaturaActual;

    }
}