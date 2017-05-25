<?php

namespace pcc\ApigatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('pccApigatorBundle:Default:index.html.twig');
    }
}
