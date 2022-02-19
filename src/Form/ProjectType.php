<?php

namespace App\Form;

use App\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null,['label' => 'Titre'])
            ->add('description')
            ->add('deadline', DateType::class, ['placeholder' => ['year' => 'Année', 'month' => 'Mois', 'day' => 'Jour']])
            ->add('status', ChoiceType::class, array("label" => "Statut",
                'choices' => array('En cours' => 'in progress', 'Terminé' => 'done'),
            ))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
