<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UpdatePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oldPassword', PasswordType::class, [
                'mapped' => false,
                'label' => 'Ancien mot de passe',
                'attr' => [
                    'placeholder' => "Ancien mot de passe",
                ]
            ])
            ->add('plainPassword', RepeatedType::class, [
                'mapped' => false,
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent être identiques.',
                'required' => true,
                'first_name' => "password",
                'first_options'  => [
                    'label' => 'Nouveau mot de passe',
                    'attr' => [
                        'placeholder' => "Nouveau mot de passe",
                    ]
                ],
                'second_name' => "passwordRepeat",
                'second_options' => [
                    'label' => 'Confirmer le nouveau mot de passe',
                    'attr' => [
                        'placeholder' => "Répéter le mot de passe",
                    ]
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => "Modifier mon mot de passe !",
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }

    /**
     * Helper for configuration on form
     *
     * @param string $label
     * @param string $placeholder
     * @param array $options
     * @return array
     */
    private function setConfig($label, $placeholder, $options = []) {
        return array_merge_recursive([
            'label' => $label,
            'attr' => [
                'placeholder' => $placeholder
            ]
        ], $options);
    }
}
