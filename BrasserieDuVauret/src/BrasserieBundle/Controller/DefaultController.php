<?php

namespace BrasserieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('BrasserieBundle:Default:index.html.twig');
    }

    /**
     * @Route("/brasserie")
     */
    public function brasserieAction()
    {
        return $this->render('BrasserieBundle:Default:brasserie.html.twig');
    }

    /**
     * @Route("/actualites")
     */
    public function actualitesAction()
    {
        return $this->render('BrasserieBundle:Default:actualites.html.twig');
    }

    /**
     * @Route("/bieres")
     */
    public function bieresAction()
    {

        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('VauretAdminBundle:Produits');

        $listProduits = $repository->findAll();

        return $this->render('BrasserieBundle:Default:bieres.html.twig' , array('bieres'=>$listProduits));
    }

    /**
     * @Route("/pointsdevente")
     */
    public function pointsdeventeAction()
    {
        return $this->render('BrasserieBundle:Default:pointsdevente.html.twig');
    }

    /**
     * @Route("/brasserie2")
     */
    public function brasserie2Action()
    {
        return $this->render('BrasserieBundle:Default:brasserie2.html.twig');
    }




}
