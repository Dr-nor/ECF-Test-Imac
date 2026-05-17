<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Menu;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        /** @var Menu $menu */
        $menu = $options['menu'];
        $minPersonnes = $menu->getNombrePersonneMinimum();

        $builder
            // ── Nombre de personnes ──────────────────────────────
            ->add('nombrePersonnes', IntegerType::class, [
                'label'       => 'Nombre de personnes',
                'attr'        => [
                    'min'         => $minPersonnes,
                    'max'         => 50,
                    'placeholder' => 'Ex : 10',
                    'class'       => 'form-control',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez indiquer le nombre de personnes.']),
                    new Range([
                        'min'        => $minPersonnes,
                        'max'        => 50,
                        'notInRangeMessage' => 'Entre {{ min }} et {{ max }} personnes pour ce menu.',
                    ]),
                ],
            ])

            // ── Date de prestation ───────────────────────────────
            ->add('datePrestation', DateType::class, [
                'label'       => 'Date de prestation',
                'widget'      => 'single_text',
                'attr'        => [
                    'min'   => (new \DateTime('+1 day'))->format('Y-m-d'),
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez choisir une date.']),
                    new GreaterThan([
                        'value'   => new \DateTime('today'),
                        'message' => 'La date de prestation doit être dans le futur.',
                    ]),
                ],
            ])

            // ── Adresse de livraison ─────────────────────────────
            ->add('adresseLivraison', TextType::class, [
                'label'       => 'Adresse de livraison',
                'attr'        => [
                    'placeholder' => 'Ex : 12 rue des Fleurs, 33000 Bordeaux',
                    'class'       => 'form-control',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez indiquer l\'adresse de livraison.']),
                ],
            ])

            // ── Bouton submit ────────────────────────────────────
            ->add('submit', SubmitType::class, [
                'label' => 'Confirmer ma commande',
                'attr'  => ['class' => 'btn btn-primary w-100 mt-3'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);

        // Option 'menu' obligatoire — passée depuis le controller
        $resolver->setRequired('menu');
        $resolver->setAllowedTypes('menu', Menu::class);
    }
}