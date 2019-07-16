<?php
namespace Mapbender\CoreBundle\Element\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class HTMLElementAdminType
 * @package Mapbender\CoreBundle\Element\Type
 */
class HTMLElementAdminType extends AbstractType
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'htmlelement';
    }

    /**
     * @inheritdoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'application' => null,
        ));
    }

    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', 'html', [
                'required' => false,
            ])
            ->add('classes', 'text', [
                'required' => false,
            ]);
    }
}
