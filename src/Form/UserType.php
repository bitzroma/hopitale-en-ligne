<?php

namespace App\Form;


use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('username', TextType::class)
            ->add('nom', TextType::class)
            ->add('prenom',  TextType::class)
            ->add('naissance',  BirthdayType::class)
            ->add('sexe',  ChoiceType::class,array(
            'choices' => array(
                'F.' => "feminin",
                'M.' => "masculin")))
            ->add('adresse',  TextType::class )
            ->add('telephone',  TextType::class)
            ->add('email',  EmailType::class)
            ->add('password', RepeatedType::class, array(
            'type' => PasswordType::class,
            'second_options' => array('label' => 'Confirmation'),
            
        ))
    ;
            }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
