<?php

namespace pcc\ApigatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class testController extends Controller
{
    /**
     * Renderiza los links a las diferentes Actions disponibles
     * para comodidad del looser. En este caso yo mismo.
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('pccApigatorBundle:Default:index.html.twig');
    }

    /**
     * Devuelve el tiempo de Murcia y algunos dumps interesantes ^^
     * @param Request $request
     */
    public function testAction(\Symfony\Component\HttpFoundation\Request  $request)
    {
        $APIKEY = '18a7c380835ade989f795f3298ab2b09';
        $URI = 'api.openweathermap.org/data/2.5/weather?q=Murcia,es&APPID='.$APIKEY;

        $apiGatorService = $this->get('pcc_apigator.apigator');

        $apiGatorService->setCurrentUri($URI);
        $decodedJson = $apiGatorService->getJsonDecodedCurlResponse();

        dump($decodedJson);
        dump($this->get('pcc_apigator.apigator'));
        dump(self::get('service_container'));
        die();

    }

}
