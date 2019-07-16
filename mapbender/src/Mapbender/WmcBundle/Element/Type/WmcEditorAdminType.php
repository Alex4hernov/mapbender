<?php

namespace Mapbender\WmcBundle\Element\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Description of WmcEditorAdminType
 *
 * @author Paul Schmidt
 */
class WmcEditorAdminType extends AbstractType
{

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'wmceditor';
    }

    /**
     * @inheritdoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'application' => null
            )
        );
    }

    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tooltip', 'text', array('required' => false))
            ->add(
                'target',
                'target_element',
                array(
                    'element_class' => 'Mapbender\\CoreBundle\\Element\\Map',
                    'application' => $options['application'],
                    'property_path' => '[target]',
                    'required' => false
                )
            )
            ->add(
                'width',
                'integer',
                array(
                    'required' => false
                )
            )
            ->add(
                'height',
                'integer',
                array(
                    'required' => false
                )
            );
    }
}
