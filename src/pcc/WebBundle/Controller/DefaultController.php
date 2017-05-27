<?php

namespace pcc\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('pccWebBundle:Default:index.html.twig');
    }
}
