<?php

namespace BrasserieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BrasserieBundle\Entity\Enquiry;
use BrasserieBundle\Form\EnquiryType;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="accueil")
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
     * @Route("/contact")
     */
    public function contactAction(Request $request)
    {
        // just setup a fresh $task object (remove the dummy data)
        $enquiry = new Enquiry();

        $form = $this->createForm(new EnquiryType(), $enquiry);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();


            return $this->redirectToRoute('accueil');

        }
        return $this->render('BrasserieBundle:Default:contact.html.twig',array(
        'form' => $form->createView()));
    }
}
