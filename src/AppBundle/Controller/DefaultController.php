<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Config\Definition\Exception\Exception;
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
     * @Route("/get-temperature-of/{ciudad}", name="weather_test")
     * @param string $ciudad
     *
     */
    public function testApigatorServiceAction(Request $request, $ciudad = 'Alhama de Murcia')
    {
        $APIKEY = '18a7c380835ade989f795f3298ab2b09';

        //uri posicional.
        $URI = "api.openweathermap.org/data/2.5/weather?q={$ciudad},es&APPID={$APIKEY}";


        dump("enviando Request URI: {$URI}");

        dump($this->get('pcc_apigator.apigator'));//antes de la llamada.

        $this->get('pcc_apigator.apigator')->setCurrentUri($URI)->procesaResponseCon('dump');//elegant.
        dump($arrResponse = $this->get('pcc_apigator.apigator')->setCurrentUri($URI)->getArrayResponse());    //default.

        try{
            $temperaturaActual =  $arrResponse['main']['temp'] - (float)273.15;

        } catch (\Exception $exception)
        {
            $temperaturaActual = "esta response no tiene datos de temperatura correctos";
        }


        dump($temperaturaActual);
        dump($this->get('pcc_apigator.apigator'));//tras la llamada.

        //de lo que va el curso:
        dump(self::get('service_container'));
        die();

    }
}
