<?php
/**
 * Created by PhpStorm.
 * User: ncourtois
 * Date: 31/10/2016
 * Time: 17:09
 */

// src/AppBundle/Admin/BlogPostAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlogPostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', 'text')
            ->add('body', 'textarea')
            ->add('category', 'entity', array(
                'class' => 'AppBundle\Entity\Category',
                'choice_label' => 'name',
            ))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        // ... configure $listMapper
    }
}