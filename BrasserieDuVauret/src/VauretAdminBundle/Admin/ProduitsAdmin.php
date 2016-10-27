<?php
// src/VauretAdminBundle/Admin/ProduitsAdmin.php

namespace VauretAdminBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;





class ProduitsAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nom')
            ->add('slug')
            ->add('contenu')
            ->add('file', 'file', array(
                'required' => false))
            ->add('une', ChoiceType::class, array(
                'choices'  => array(
                    'Oui' => true,
                    'Non' => false,
                ),
                'choices_as_values' => true,
            ))
            ->add('prod', ChoiceType::class, array(
                'choices'  => array(
                    'Oui' => true,
                    'Non' => false,
                ),
                'choices_as_values' => true,
            ));
    }

    public function prePersist($image)
    {
        $this->manageFileUpload($image);
    }

    public function preUpdate($image)
    {
        $this->manageFileUpload($image);
    }

    private function manageFileUpload($image)
    {
        if ($image->getFile()) {
            $image->refreshUpdated();
        }
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('slug')
            ->add('contenu')
            ->add('filename')
            ->add('une')
            ->add('prod');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nom')
            ->add('slug')
            ->add('contenu')
            ->add('filename')
            ->add('une')
            ->add('prod')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('nom')
            ->add('slug')
            ->add('contenu')
            ->add('filename')
            ->add('une')
            ->add('prod');
    }


   }

