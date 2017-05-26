<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        //testeo del apigator
        return $this->redirectToRoute('weather_test');
    }

    /**
     * @Route("/test", name="weather_test")
     * @param string $ciudad
     */
    public function testApigatorServiceAction(Request $request, $ciudad = 'Murcia')
    {
        $APIKEY = '18a7c380835ade989f795f3298ab2b09';

        //uri posicional.
        $URI = "api.openweathermap.org/data/2.5/weather?q={$ciudad},es&APPID={$APIKEY}";


        dump($this->get('pcc_apigator.apigator'));//antes de la llamada.

        $this->get('pcc_apigator.apigator')->setCurrentUri($URI)->procesaResponseCon('dump');//con elegancia.
        dump($this->get('pcc_apigator.apigator')->setCurrentUri($URI)->getArrayResponse());    //default.

        dump($this->get('pcc_apigator.apigator'));//tras la llamada.

        //de lo que va el curso:
        dump(self::get('service_container'));
        die();

    }
}
