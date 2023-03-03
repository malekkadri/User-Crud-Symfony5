<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'attr' => [
                    'placeholder' => "Prénom",
                    'class' => "form-control-user"
                ]
            ])
            ->add('lastName', TextType::class, [
                'attr' => [
                    'placeholder' => "Nom",
                    'class' => "form-control-user"
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => "Adresse email",
                    'class' => "form-control-user"
                ]
            ])
            ->add('username', TextType::class, [
                'attr' => [
                    'placeholder' => "Nom d'utilisateur",
                    'class' => "form-control-user"
                ]
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent être identiques.',
                'required' => true,
                'first_name' => "password",
                'first_options'  => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => "Mot de passe",
                        'class' => "form-control-user"
                    ]
                ],
                'second_name' => "passwordRepeat",
                'second_options' => [
                    'label' => false,
                    'attr' => [
                        'placeholder' => "Répéter le mot de passe",
                        'class' => "form-control-user"
                    ]
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => "M'inscrire !",
                'attr' => [
                    'class' => "btn btn-primary btn-user btn-block"
                ]
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
