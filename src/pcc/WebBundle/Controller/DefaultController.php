<?php

namespace pcc\WebBundle\Controller;

use pcc\WeatherBundle\pccWeatherBundle;
use pcc\WeatherBundle\WeatherProviderAPI;
use pcc\WebBundle\Entity\City;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->redirectToRoute('pcc_web_get_weatheronlinemap_temp_by_city');
    }


    /**
     * TODO: TIPADO DE $city y $countrycode , usar paramconverter
     * @param Request $request
     */
    public function getTempOfCityAction(Request $request, $city, $countryCode)
    {

        return $this->render('pccWebBundle:Default:renderTemperature.html.twig',[
                'ciudad' => $city,
                'temperatura' => $this->get('pcc_weather.weather_provider_api')->getCelsiusByCity($city),
            ]
            );
    }
}
