<?php
// src/BrasserieBundle/Form/EnquiryType.php

namespace BrasserieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('email', 'email');
        $builder->add('telephone');
        $builder->add('commentaire', 'textarea');

    }

    public function getName()
    {
        return 'contact';
    }
}