<?php
// src/BrasserieBundle/Entity/Enquiry.php

namespace BrasserieBundle\Entity;

use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;



class Enquiry
{
    protected $nom;

    protected $prenom;

    protected $email;

    protected $telephone;

    protected $commentaire;

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->non = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom ($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getCommentaire()
    {
        return $this->commentaire;
    }

    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /*public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('nom', new NotBlank());

        $metadata->addPropertyConstraint('prenom', new NotBlank());

        $metadata->addPropertyConstraint('email', new Email());

        $metadata->addPropertyConstraint('telephone', new NotBlank());

        $metadata->addPropertyConstraint( 'commentaire', new NotBlank());


    }*/

}