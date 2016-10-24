<?php

namespace VauretAdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 */
class Produits
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $contenu;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $une;

    /**
     * @var string
     */
    private $prod;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Produits
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Produits
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Produits
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Produits
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set une
     *
     * @param string $une
     * @return Produits
     */
    public function setUne($une)
    {
        $this->une = $une;

        return $this;
    }

    /**
     * Get une
     *
     * @return string 
     */
    public function getUne()
    {
        return $this->une;
    }

    /**
     * Set prod
     *
     * @param string $prod
     * @return Produits
     */
    public function setProd($prod)
    {
        $this->prod = $prod;

        return $this;
    }

    /**
     * Get prod
     *
     * @return string 
     */
    public function getProd()
    {
        return $this->prod;
    }
}
