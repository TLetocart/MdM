<?php

namespace App\Form;

use App\Entity\Materiel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MaterielType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prix_ht', null, [
                'attr' => ['id' => 'prix_ht']
            ])
            
            ->add('TVA', null, [
                'attr' => ['id' => 'tva']
            ])
            
            ->add('prix_ttc', null, [
                'attr' => ['id' => 'prix_ttc']
            ])
            
            ->add('quantite')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Materiel::class,
        ]);
    }
}
