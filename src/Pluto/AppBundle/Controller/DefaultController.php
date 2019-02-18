<?php

namespace Pluto\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlutoAppBundle:Default:index.html.twig');
    }
}
