<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $this->testApigatorServiceAction();
        die();
        //testeo del apigator
        return $this->redirectToRoute('pcc_apigator_testpage');
    }

    public function testApigatorServiceAction(Request $request, $ciudad)
    {
        $APIKEY = '18a7c380835ade989f795f3298ab2b09';
        $ciudad = 'Murcia';

        //uri posicional.
        $URI = "api.openweathermap.org/data/2.5/weather?q={$ciudad},es&APPID={$APIKEY}";


        dump($this->get('pcc_apigator.apigator'));//antes de la llamada.

        $this->get('pcc_apigator.apigator')->setCurrentUri($URI)->procesaResponseCon('dump');//con elegancia.
        dump($this->get('pcc_apigator.apigator')->setCurrentUri($URI)->getArrayResponse());    //default.

        dump($this->get('pcc_apigator.apigator'));//tras la llamada.

    }
}
