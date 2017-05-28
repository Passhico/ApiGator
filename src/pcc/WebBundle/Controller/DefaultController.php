<?php

namespace pcc\WebBundle\Controller;

use pcc\WeatherBundle\pccWeatherBundle;
use pcc\WeatherBundle\WeatherProviderAPI;
use pcc\WebBundle\Entity\City;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        //return $this->redirectToRoute('pcc_web_get_weatheronlinemap_temp_by_city');
        return $this->redirectToRoute('pcc_web_get_all_cities_from_doctrine');

    }


    /**
     * TODO: TIPADO DE $city y $countrycode , usar paramconverter
     * @param Request $request
     */
    public function getMeassuresOfCityUsingPccWeatherProviderAction(Request $request, $city, $countryCode)
    {

        return $this->render('pccWebBundle:Default:renderTemperature.html.twig',[
                'ciudad' => $city,
                'meassures' => $this->get('pcc_weather.weather_provider_api')->getMeasuresBycity($city),
            ]
            );
    }


    /**
     * @param Request $request
     */
  public function getAllcitiesFromDoctrineAction(Request  $request)
  {

         $allCities = $this->get('doctrine')->getManager()->getRepository(City::class)->findAll();
       dump($allCities);
       die();

  }
}
