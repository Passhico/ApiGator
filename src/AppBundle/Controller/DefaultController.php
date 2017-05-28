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
        return $this->redirectToRoute('pcc_web_homepage');
        return $this->redirectToRoute('pcc_apigator_homepage');
        return $this->redirectToRoute('pcc_apigator_testpage');
        return $this->redirectToRoute('pcc_apigator_testpage');


    }


}
