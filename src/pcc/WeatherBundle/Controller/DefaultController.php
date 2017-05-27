<?php

namespace pcc\WeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('pccWeatherBundle:Default:index.html.twig');
    }
}
