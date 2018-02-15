<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table(name="proprietaire")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\ProprietaireRepository")
 */
class Proprietaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroPiece", type="string", length=20, unique=true)
     */
    private $numeroPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=20)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=20)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Addresse", type="string", length=100)
     */
    private $addresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=20)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeBanque", type="string", length=50, unique=true)
     */
    private $codeBanque;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numeroPiece
     *
     * @param string $numeroPiece
     *
     * @return Proprietaire
     */
    public function setNumeroPiece($numeroPiece)
    {
        $this->numeroPiece = $numeroPiece;

        return $this;
    }

    /**
     * Get numeroPiece
     *
     * @return string
     */
    public function getNumeroPiece()
    {
        return $this->numeroPiece;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Proprietaire
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Proprietaire
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set addresse
     *
     * @param string $addresse
     *
     * @return Proprietaire
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;

        return $this;
    }

    /**
     * Get addresse
     *
     * @return string
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Proprietaire
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Proprietaire
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set codeBanque
     *
     * @param string $codeBanque
     *
     * @return Proprietaire
     */
    public function setCodeBanque($codeBanque)
    {
        $this->codeBanque = $codeBanque;

        return $this;
    }

    /**
     * Get codeBanque
     *
     * @return string
     */
    public function getCodeBanque()
    {
        return $this->codeBanque;
    }
}

