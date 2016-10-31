<?php
// src/BrasserieBundle/Form/EnquiryType.php

namespace BrasserieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class);
        $builder->add('prenom', TextType::class);
        $builder->add('email', EmailType::class);
        $builder->add('telephone', TextType::class);
        $builder->add('commentaire', TextareaType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BrasserieBundle\Entity\Enquiry',
                                     )

                               );
    }

    public function getName()
    {
        return 'contact';
    }
}