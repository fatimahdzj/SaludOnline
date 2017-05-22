<?php

namespace bdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedicoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //text=formato que quiero que maneje, en este caso imput de tipo text,required=que el usuario este obligado a poner el dato
        $builder->add('nommed','text',array ("required"=>true))
                ->add('telefono','text',array ("required"=>true))
                ->add('consultorio','text',array ("required"=>true))
                ->add('idesp','text',array ("required"=>true))
                ->add('idserv','text',array ("required"=>true))     
                ->add('Aceptar','submit');
               
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'bdBundle\Entity\Medico'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bdbundle_medico';
    }


}
