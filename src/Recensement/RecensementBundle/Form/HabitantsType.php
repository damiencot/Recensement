<?php

namespace Recensement\RecensementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class HabitantsType extends AbstractType
{
    private $em;

    public function __construct($em)
    {
        /**
         * On récupère l'entity manager qu'on a insère via notre contrôleur
         */
        $this->em = $em;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe', 'choice', array('choices' => array(true => 'homme', false => 'femme')))
            ->add('dateNaissance', 'date', array(
                'years' => range(date('Y') -50, date('Y'))))
            ->add('telephone')
            ->add('adresse')
            ->add('zone', 'entity', array('class' => 'Recensement\RecensementBundle\Entity\Thouars','property'=>'zone',))
            ->add('parents1', new ParentsType())
            ->add('parents2', new ParentsType());

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Recensement\RecensementBundle\Entity\Habitants',


        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'recensement_recensementbundle_habitants';
    }
}
