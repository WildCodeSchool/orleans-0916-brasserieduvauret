<?php
// src/BrasserieBundle/Form/NewsType.php

namespace VauretAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
               $builder->add('mail', EmailType::class, array('label' => false));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'VauretAdminBundle\Entity\Mail',
            )

        );
    }

    public function getName()
    {
        return 'contact';
    }
}