<?php

namespace VauretAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
class VauretAdminController extends Controller
{
    /**
     * @Route("/admin")
     */

    public function indexAction()
    {
        return $this->render('VauretAdminBundle:VauretAdmin:index');
    }
}