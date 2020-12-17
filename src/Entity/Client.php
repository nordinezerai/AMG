<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sigle_nom_commercial;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_groupe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $activite;

    /**
     * @ORM\Column(type="integer")
     */
    private $siret;

    /**
     * @ORM\Column(type="integer")
     */
    private $siren;

    /**
     * @ORM\Column(type="integer")
     */
    private $nic;

    /**
     * @ORM\Column(type="integer")
     */
    private $capital;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $forme_juridique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $siege_social;

    /**
     * @ORM\Column(type="integer")
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $signataire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $qualite_signataire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destinataire_piece_contractuelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity=Naf::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $naf;

    /**
     * @ORM\ManyToOne(targetEntity=ConventionCollective::class, cascade={"persist", "remove"})
     */
    private $cc;

    /**
     * @ORM\ManyToOne(targetEntity=Courtier::class, cascade={"persist", "remove"})
     */
    private $courtier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $signataire_ipsec1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $signataire_ipsec2;

    /**
     * @ORM\Column(type="boolean")
     */
    private $controle_signataire_ipsec1;

    /**
     * @ORM\Column(type="boolean")
     */
    private $controle_signataire_ipsec2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSigleNomCommercial(): ?string
    {
        return $this->sigle_nom_commercial;
    }

    public function setSigleNomCommercial(string $sigle_nom_commercial): self
    {
        $this->sigle_nom_commercial = $sigle_nom_commercial;

        return $this;
    }

    public function getNomGroupe(): ?string
    {
        return $this->nom_groupe;
    }

    public function setNomGroupe(?string $nom_groupe): self
    {
        $this->nom_groupe = $nom_groupe;

        return $this;
    }

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(?string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    public function getSiret(): ?int
    {
        return $this->siret;
    }

    public function setSiret(int $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getSiren(): ?int
    {
        return $this->siren;
    }

    public function setSiren(int $siren): self
    {
        $this->siren = $siren;

        return $this;
    }

    public function getNic(): ?int
    {
        return $this->nic;
    }

    public function setNic(int $nic): self
    {
        $this->nic = $nic;

        return $this;
    }

    public function getCapital(): ?int
    {
        return $this->capital;
    }

    public function setCapital(int $capital): self
    {
        $this->capital = $capital;

        return $this;
    }

    public function getFormeJuridique(): ?string
    {
        return $this->forme_juridique;
    }

    public function setFormeJuridique(string $forme_juridique): self
    {
        $this->forme_juridique = $forme_juridique;

        return $this;
    }

    public function getSiegeSocial(): ?string
    {
        return $this->siege_social;
    }

    public function setSiegeSocial(string $siege_social): self
    {
        $this->siege_social = $siege_social;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(int $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getSignataire(): ?string
    {
        return $this->signataire;
    }

    public function setSignataire(string $signataire): self
    {
        $this->signataire = $signataire;

        return $this;
    }

    public function getQualiteSignataire(): ?string
    {
        return $this->qualite_signataire;
    }

    public function setQualiteSignataire(string $qualite_signataire): self
    {
        $this->qualite_signataire = $qualite_signataire;

        return $this;
    }

    public function getDestinatairePieceContractuelle(): ?string
    {
        return $this->destinataire_piece_contractuelle;
    }

    public function setDestinatairePieceContractuelle(string $destinataire_piece_contractuelle): self
    {
        $this->destinataire_piece_contractuelle = $destinataire_piece_contractuelle;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSignataireIpsec1(): ?bool
    {
        return $this->signataire_ipsec1;
    }

    public function setSignataireIpsec1(bool $signataire_ipsec1): self
    {
        $this->signataire_ipsec1 = $signataire_ipsec1;

        return $this;
    }

    public function getNaf(): ?Naf
    {
        return $this->naf;
    }

    public function setNaf(Naf $naf): self
    {
        $this->naf = $naf;

        return $this;
    }

    public function getCc(): ?ConventionCollective
    {
        return $this->cc;
    }

    public function setCc(?ConventionCollective $cc): self
    {
        $this->cc = $cc;

        return $this;
    }

    public function getCourtier(): ?Courtier
    {
        return $this->courtier;
    }

    public function setCourtier(?Courtier $courtier): self
    {
        $this->courtier = $courtier;

        return $this;
    }

    public function getSignataireIpsec2(): ?string
    {
        return $this->signataire_ipsec2;
    }

    public function setSignataireIpsec2(string $signataire_ipsec2): self
    {
        $this->signataire_ipsec2 = $signataire_ipsec2;

        return $this;
    }

    public function getControleSignataireIpsec1(): ?bool
    {
        return $this->controle_signataire_ipsec1;
    }

    public function setControleSignataireIpsec1(bool $controle_signataire_ipsec1): self
    {
        $this->controle_signataire_ipsec1 = $controle_signataire_ipsec1;

        return $this;
    }

    public function getControleSignataireIpsec2(): ?bool
    {
        return $this->controle_signataire_ipsec2;
    }

    public function setControleSignataireIpsec2(bool $controle_signataire_ipsec2): self
    {
        $this->controle_signataire_ipsec2 = $controle_signataire_ipsec2;

        return $this;
    }
}
