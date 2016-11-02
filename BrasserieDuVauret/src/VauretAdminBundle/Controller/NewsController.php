<?php

namespace VauretAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use VauretAdminBundle\Entity\email;
use VauretAdminBundle\Form\NewsType;
use Symfony\Component\HttpFoundation\Request;



class NewsController extends Controller
{
    public function Action(Request $request)
    {
        $email = new email();

        $form = $this->createForm(NewsType::class, $email);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$actuality` variable has also been updated

            $email = $form["email"]->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Actuality is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($email);
            $em->flush(); // envoi des données

            return $this->redirectToRoute('accueil');


            return $this->render('', array('name' => $name));
        }

    }

}
