<?php

namespace App\Form;

use App\Entity\Queries;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('queryId')
            ->add('ClientName')
            ->add('clientEmail')
            ->add('queryDate')
            ->add('phoneNumber')
            ->add('Message')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Queries::class,
        ]);
    }
}
