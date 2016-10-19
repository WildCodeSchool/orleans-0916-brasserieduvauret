<?php

namespace BrasserieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PlaylistController extends Controller
{
    /**
     * @Route("/dark_side_of_the_mousse/playlist")
     */
    public function darkSideOfTheMousseAction()
    {
        return $this->render('BrasserieBundle:Playlist:dark_side_of_the_mousse.html.twig');
    }


    /**
     * @Route("hippie_ale/playlist")
     */
    public function hippieAleAction()
    {
        return $this->render('BrasserieBundle:Playlist:hippie_ale.html.twig');
    }


    /**
     * @Route("lavalle_de_la_loire_ambree/playlist")
     */
    public function lavalleDeLaLoireAmbreeAction()
    {
        return $this->render('BrasserieBundle:Playlist:lavalle_de_la_loire_ambree.html.twig');
    }


    /**
     * @Route("lavalle_de_la_loire_blanche/playlist")
     */
    public function lavalleDeLaLoireBlancheAction()
    {
        return $this->render('BrasserieBundle:Playlist:lavalle_de_la_loire_blanche.html.twig');
    }

    /**
     * @Route("lavalle_de_la_loire_blonde/playlist")
     */
    public function lavalleDeLaLoireBlondeAction()
    {
        return $this->render('BrasserieBundle:Playlist:lavalle_de_la_loire_blonde.html.twig');
    }

}


