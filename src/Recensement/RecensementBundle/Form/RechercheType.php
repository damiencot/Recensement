<?php
namespace Recensement\RecensementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheType extends AbstractType
{
    public function buildForm(FormbuilderInterface $builder, array $option)
    {
        $builder->add('recherche','text', array('label' => false,
                                                'attr' => array('class' => 'input-medium search-query')));
    }
    
    public function getName()
    {
        return 'recense_recensebundle_recherche';
    }
}