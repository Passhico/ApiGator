<?php

namespace pcc\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $temperatura  = 22;
        $ciudad = 'Furcia';
        return $this->render('pccWebBundle:Default:index.html.twig',[
                'ciudad' => $ciudad,
                'temperatura' => $temperatura,
            ]
            );
    }
}
