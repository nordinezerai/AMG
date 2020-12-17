<?php

namespace App\DataFixtures;

use App\Entity\Client;
use App\Entity\ConventionCollective;
use App\Entity\Courtier;
use App\Entity\Naf;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ClientFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $courtier = new Courtier();

        $courtier->setNom("ACTES ASSURANCES");
        $courtier->setReferent("Monsieur DESGAULTIERES");
        $courtier->setAdresse("9 Rue Vauban, 69000 Lyon");

        $naf = new Naf();

        $naf->setCodeNaf("01.12Z");
        $naf->setDesignation("Culture du riz");

        $ccn = new ConventionCollective();

        $ccn->setNum("3001");
        $ccn->setNom("industrie du pétrole");

        $client = new Client();

        $client->setSigleNomCommercial("TRANSDEV");
        $client->setCourtier($courtier);
        $client->setNomGroupe("TRANSDEV GROUP");
        $client->setActivite("Une activité");
        $client->setSiret(14653428475634);
        $client->setNaf($naf);
        $client->setSiren(146534284);
        $client->setNic(75634);
        $client->setCapital(1209275);
        $client->setFormeJuridique("SA");
        $client->setCc($ccn);
        $client->setSiegeSocial("2 Avenue Charles de Gaulles");
        $client->setCodePostal(93600);
        $client->setVille("Nanterre");
        $client->setSignataire("John Doe");
        $client->setQualiteSignataire("Directeur Général");
        $client->setDestinatairePieceContractuelle("Johnny Doe");
        $client->setEmail("johnnydoe@gmail.com");
        $client->setSignataireIpsec1("Aicha Abadou");
        $client->setSignataireIpsec2("");
        $client->setControleSignataireIpsec1(true);
        $client->setControleSignataireIpsec2(false);

        $manager->persist($client);


        $courtier2 = new Courtier();

        $courtier2->setNom("ACTES ASSURANCES");
        $courtier2->setReferent("Monsieur DESGAULTIERES");
        $courtier2->setAdresse("9 Rue Vauban, 69000 Lyon");

        $naf2 = new Naf();

        $naf2->setCodeNaf("01.12Z");
        $naf2->setDesignation("Culture du riz");

        $ccn2 = new ConventionCollective();

        $ccn2->setNum("3001");
        $ccn2->setNom("industrie du pétrole");

        $client2 = new Client();

        $client2->setSigleNomCommercial("TOTAL");
        $client2->setCourtier($courtier);
        $client2->setNomGroupe("TRANSDEV GROUP");
        $client2->setActivite("Une activité");
        $client2->setSiret(14653428475634);
        $client2->setNaf($naf);
        $client2->setSiren(146534284);
        $client2->setNic(75634);
        $client2->setCapital(1209275);
        $client2->setFormeJuridique("SA");
        $client2->setCc($ccn);
        $client2->setSiegeSocial("2 Avenue Charles de Gaulles");
        $client2->setCodePostal(93600);
        $client2->setVille("Nanterre");
        $client2->setSignataire("John Doe");
        $client2->setQualiteSignataire("Directeur Général");
        $client2->setDestinatairePieceContractuelle("Johnny Doe");
        $client2->setEmail("johnnydoe@gmail.com");
        $client2->setSignataireIpsec1("Aicha Abadou");
        $client2->setSignataireIpsec2("");
        $client2->setControleSignataireIpsec1(true);
        $client2->setControleSignataireIpsec2(false);

        $manager->persist($client2);

        $manager->flush();
    }
}
