<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null,['label' => 'Titre'])
            ->add('deadline', DateType::class, ['placeholder' => ['year' => 'Année', 'month' => 'Mois', 'day' => 'Jour', null]])
            ->add('status', ChoiceType::class, array("label" => "Statut",
                'choices' => array('En cours' => 'in progress', 'Terminée' => 'done'),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
