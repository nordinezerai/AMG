<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\ConventionCollective;
use App\Entity\Courtier;
use App\Entity\Naf;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sigle_nom_commercial')
            ->add('nom_groupe')
            ->add('activite')
            ->add('siret')
            ->add('siren')
            ->add('nic')
            ->add('capital')
            ->add('forme_juridique')
            ->add('siege_social')
            ->add('code_postal')
            ->add('ville')
            ->add('signataire')
            ->add('qualite_signataire')
            ->add('destinataire_piece_contractuelle')
            ->add('email')
            ->add('signataire_ipsec1')
            ->add('signataire_ipsec2')
            ->add('controle_signataire_ipsec1')
            ->add('controle_signataire_ipsec2')
            ->add('naf', NafType::class)
            ->add('cc', ConventionCollectiveType::class)
            ->add('courtier', CourtierType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
