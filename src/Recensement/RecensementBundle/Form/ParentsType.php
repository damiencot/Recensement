<?php

namespace Recensement\RecensementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ParentsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateNaissance', 'date', array(
                'years' => range(date('Y') -50, date('Y'))))
            ->add('sexe', 'choice', array('choices' => array(true => 'homme', false => 'femme')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Recensement\RecensementBundle\Entity\Parents'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'recensement_recensementbundle_parents';
    }
}
