<?php

namespace bdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomusr','text',array ("required"=>true))
                ->add('pass','text',array ("required"=>true))
                ->add('nomcom','text',array ("required"=>true))
                ->add('numafil','text')
                ->add('curp','text',array ("required"=>true))
               // ->add('numtra')
                ->add('telefono','text',array ("required"=>true))
                ->add('email','text',array ("required"=>true))
               // ->add('idtipo','text',array ("required"=>true))  
                ->add('Aceptar','submit') ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'bdBundle\Entity\Usuario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bdbundle_usuario';
    }


}
