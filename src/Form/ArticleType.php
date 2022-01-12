<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title',TextType::class, [
                        'label' => 'Titre',
                        'attr'=> [
                            'placeholder' => 'Titre de l\'article',
                            'class' => 'form-control'
                        ]
                     ])
            ->add('content',TextType::class, [
                'label' => 'Contenu',
                'attr'=> [
                    'placeholder' => 'Votre Contenu',
                    'class' => 'form-control'
                ]
             ])
            ->add('image',TextType::class, [
                'label' => 'Image',
                'attr'=> [
                    'placeholder' => 'URL de l\'image',
                    'class' => 'form-control'
                ]
             ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
