<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Biens
 *
 * @ORM\Table(name="biens")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\BiensRepository")
 */
class Biens
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
     * @ORM\Column(name="NomBien", type="string", length=30)
     */
    private $nomBien;

    /**
     * @var string
     *
     * @ORM\Column(name="Prix", type="string", length=30)
     */
    private $Prix;

    /**
     * @var bool
     *
     * @ORM\Column(name="Etat", type="boolean")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Biens")
     * @ORM\JoinColumn(nullable=true)
     */
    private $bienParent;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Localite")
     * @ORM\JoinColumn(nullable=false)
     */

    private $IdLocalite;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Proprietaire")
     * @ORM\JoinColumn(nullable=false)
     */

    private $IdProprietaire;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\TypeBien")
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $IdType;

 /**
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Biens")
     * @ORM\JoinColumn(nullable=true)
     */
    private $IdImage;




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
     * Set nomBien
     *
     * @param string $nomBien
     *
     * @return Biens
     */
    public function setNomBien($nomBien)
    {
        $this->nomBien = $nomBien;

        return $this;
    }

    /**
     * Get nomBien
     *
     * @return string
     */
    public function getNomBien()
    {
        return $this->nomBien;
    }
     /**
     * Set Prix
     *
     * @param string $Prix
     *
     * @return Biens
     */
    public function setPrix($Prix)
    {
        $this->Prix = $Prix;

        return $this;
    }

    /**
     * Get Prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->Prix;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Biens
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Biens
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

   
    

    /**
     * Set bienParent
     *
     * @param \Akina\ImmobilierBundle\Entity\Biens $bienParent
     *
     * @return Biens
     */
    public function setBienParent(\Akina\ImmobilierBundle\Entity\Biens $bienParent = null)
    {
        $this->bienParent = $bienParent;

        return $this;
    }

    /**
     * Get bienParent
     *
     * @return \Akina\ImmobilierBundle\Entity\Biens
     */
    public function getBienParent()
    {
        return $this->bienParent;
    }

    /**
     * Set idLocalite
     *
     * @param \Akina\ImmobilierBundle\Entity\Localite $idLocalite
     *
     * @return Biens
     */
    public function setIdLocalite(\Akina\ImmobilierBundle\Entity\Localite $idLocalite)
    {
        $this->IdLocalite = $idLocalite;

        return $this;
    }

    /**
     * Get idLocalite
     *
     * @return \Akina\ImmobilierBundle\Entity\Localite
     */
    public function getIdLocalite()
    {
        return $this->IdLocalite;
    }

    /**
     * Set idProprietaire
     *
     * @param \Akina\ImmobilierBundle\Entity\Proprietaire $idProprietaire
     *
     * @return Biens
     */
    public function setIdProprietaire(\Akina\ImmobilierBundle\Entity\Proprietaire $idProprietaire)
    {
        $this->IdProprietaire = $idProprietaire;

        return $this;
    }

    /**
     * Get idProprietaire
     *
     * @return \Akina\ImmobilierBundle\Entity\Proprietaire
     */
    public function getIdProprietaire()
    {
        return $this->IdProprietaire;
    }

    /**
     * Set idType
     *
     * @param \Akina\ImmobilierBundle\Entity\TypeBien $idType
     *
     * @return Biens
     */
    public function setIdType(\Akina\ImmobilierBundle\Entity\TypeBien $idType)
    {
        $this->IdType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return \Akina\ImmobilierBundle\Entity\TypeBien
     */
    public function getIdType()
    {
        return $this->IdType;
    }

    /**
     * Set idImage
     *
     * @param \Akina\ImmobilierBundle\Entity\Biens $idImage
     *
     * @return Biens
     */
    public function setIdImage(\Akina\ImmobilierBundle\Entity\Biens $idImage = null)
    {
        $this->IdImage = $idImage;

        return $this;
    }

    /**
     * Get idImage
     *
     * @return \Akina\ImmobilierBundle\Entity\Biens
     */
    public function getIdImage()
    {
        return $this->IdImage;
    }
}
