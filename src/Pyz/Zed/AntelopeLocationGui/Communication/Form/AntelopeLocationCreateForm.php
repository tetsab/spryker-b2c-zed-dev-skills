<?php

namespace Pyz\Zed\AntelopeLocationGui\Communication\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AntelopeLocationCreateForm extends AbstractType
{
    public const FIELD_NAME = 'name';

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(self::FIELD_NAME, TextType::class, [
            'label' => 'Location Name',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
