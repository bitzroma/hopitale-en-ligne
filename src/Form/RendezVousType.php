<?php

namespace App\Form;

use App\Entity\RendezVous;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RendezVousType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typeRv', ChoiceType::class, array(
                'choices' => array(
                    'Allergologie ou Immunologie' => "L’allergologie ou l’immunologie",
                        'Anesthésiologie' => "L’anesthésiologie",
                        'Cardiologie' => "La cardiologie",
                        'Chirurgie' => "La chirurgie",
                        'Dermatologie' => "La dermatologie",
                        'Dynécologie' => "La gynécologie",
                        'Neurologie' => "La neurologie",
                        'Odontologie' => "L’odontologie",
                        'Pédiatrie' => "La pédiatrie",
                        'Radiothérapie' => "La radiothérapie",
                        'Infectiologie' => "L’infectiologie",
                        'Médecine générale' => "La médecine générale",
                        'Ophtalmologie' => "L’ophtalmologie",
                        'Psychiatrie' => "La psychiatrie",
                        'Urologie' => "L’urologie"
                    )))
                ->add('dateRv', DateTimeType::class)
                ->add('docteur', ChoiceType::class, array(
                    'choices' => array(
                        'Dr Mamadou Lamine Beye' => "Dr Mamadou Lamine Beye",
                        'Dr Khemmesse Séne' => "Dr Khemmesse Séne",
                        'Dr Anna Sow ' => "Dr Anna Sow",
                        'Dr Abdou Aziz Ndiaye' => "Dr Abdou Aziz Ndiaye",
                        'Dr Isseu Sow Ping' => "Dr Isseu Sow Ping",
                        'Dr Mamadou Diallo' => "Dr Mamadou Diallo",
                        'Dr Issa Ba' => "Dr Issa Ba",
                        'Dr Fatoumata Diallo' => "Dr Fatoumata Diallo",
                        'Dr Bigué Diop' => "Dr Bigué Diop"
                        )))
                ->add('lieu', ChoiceType::class, array(
                    'choices' => array(
                        'HS Dakar Plateau' => "HS Dakar Plateau",
                        'HS Parcelles Assainies' => "HS Parcelles Assainies",
                        'HS pikine' => "HS pikine",
                        'HS Fann' => "HS Fann",
                        'HS Fatick' => "HS Fatick",
                        'HS Kaolack' => "HS Kaolack",
                        'HS Mbour' => "HS Mbour",
                        'HS Thies' => "HS Thies",
                        'HS Diamniadio' => "HS Diamniadio",
                        'HS Rufisque' => "HS Rufisque"
                        )))
                        ->add('user', TextType::class)
                        // array('default' => $this->getUser())
                
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
        ]);
    }
}
