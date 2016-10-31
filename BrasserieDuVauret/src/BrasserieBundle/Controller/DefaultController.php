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

        $form = $this->createForm(EnquiryType::class, $enquiry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $nom = $form["nom"]->getData();
            $prenom = $form["prenom"]->getData();
            $telephone = $form["telephone"]->getData();
            $email = $form["email"]->getData();
            $commentaire = $form["commentaire"]->getData();


            $message = \Swift_Message::newInstance()

                ->setSubject('Brasserie du Vauret : Vous avez un nouveau message : ')
                ->setFrom('send@example.com')
                ->setTo('sancho4582@gmail.com')
                ->setCharset('UTF-8')
                ->setContentType('text/html')

                ->setBody($this->renderView('Emails/reponse.html.twig', array('nom' => $nom,
                                                                             'prenom'=>$prenom,
                                                                             'telephone' => $telephone,
                                                                             'email'=>$email,
                                                                             'commentaire' => $commentaire
                                                                            )


                                           )
                        );



                  /*  $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                        'Emails/registration.html.twig',
                        array('name' => $name)
                    ),*/



            $this->get('mailer')->send($message);

            //return $this->render(...);



        }
        return $this->render('BrasserieBundle:Default:contact.html.twig',array(
        'form' => $form->createView()));
    }
}
