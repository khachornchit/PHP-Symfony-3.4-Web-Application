<?php

namespace Pluto\DomainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlutoApiBundle:Default:index.html.twig');
    }
}
