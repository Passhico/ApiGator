<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/test", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $APIKEY = '18a7c380835ade989f795f3298ab2b09';
        $URI = 'api.openweathermap.org/data/2.5/weather?q=Murcia,es&APPID='. $APIKEY;

        $apiGatorService = $this->get('pcc_apigator.apigator');

        $apiGatorService->setCurrentUri($URI);
        $decodedJson =  $apiGatorService->getJsonDecodedCurlResponse();

        dump($decodedJson);
        dump($this->get('pcc_apigator.apigator'));
        dump(self::get('service_container'));
    die();
    }
}
