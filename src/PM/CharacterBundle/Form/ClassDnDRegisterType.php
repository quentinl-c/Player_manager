<?php

namespace PM\CharacterBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClassDnDRegisterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',           'text',     array('required' => true))
            ->add('description',    'textarea', array('required' => false))
            ->add('skills',         'entity',   array('class' => 'PMCharacterBundle:Skill',
                                                      'property'    => 'name',
                                                      'expanded' => false,
                                                      'multiple' => true,
                                                      'required' => false,
                                                      'empty_value' => 'Compétences de Classe',
                                                      'empty_data'  => null))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PM\CharacterBundle\Entity\ClassDnD'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pm_characterbundle_classDnD_register';
    }
}
