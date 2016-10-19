<?php

namespace VauretAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VauretAdminBundle:Default:index.html.twig');
    }
}
