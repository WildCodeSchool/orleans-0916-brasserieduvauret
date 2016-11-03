<?php

namespace VauretAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VauretAdminBundle\Entity\Mail;
use VauretAdminBundle\Form\NewsType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class NewsController extends Controller
{

    /**
     * @Route("/news", name="newslet")
     */
    public function newsAction(Request $request)
    {
        $email = new Mail();

        $form = $this->createForm(NewsType::class, $email);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($email);
            $em->flush(); // envoi des données

            return $this->redirectToRoute('accueil');
        }

        return $this->render('VauretAdminBundle:News:news.html.twig', array('form' =>$form->createView()));


    }

}
