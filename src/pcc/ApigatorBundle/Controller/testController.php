<?php

namespace pcc\ApigatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Debug\Exception\ContextErrorException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Route;

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

     *
     */
    public function testApigatorServiceAction(Request $request, $city = 'Alhama de Murcia', $countryCode = 'es')
    {

        $APIKEY = '18a7c380835ade989f795f3298ab2b09';

        //uri posicional.
        $URI = "api.openweathermap.org/data/2.5/weather?q={$city},{$countryCode}&APPID={$APIKEY}";


        try {
            $socket = fsockopen($URI, 80, $errno, $errstr, 2);
            dump($socket);

        } catch (ContextErrorException $e) {

          //dump($URI);
        }


        dump("enviando Request URI: {$URI}");

        dump($this->get('pcc_apigator.apigator'));//antes de la llamada

        $this->get('pcc_apigator.apigator')->setUri($URI)->procesaResponseCon('dump');//elegant.
        dump($arrResponse = $this->get('pcc_apigator.apigator')->setUri($URI)->getArrayResponse());    //default.

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
