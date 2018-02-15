<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * search
 *
 * @ORM\Table(name="search")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\searchRepository")
 */
class search
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
     *
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\Localite")
     * @ORM\JoinColumn(nullable=false)
     */

    private $IdLocalite;

    /**
     * @var string
     *
     * @ORM\Column(name="NomBien", type="string", length=30)
     */
    private $Prix;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Akina\ImmobilierBundle\Entity\TypeBien")
     * @ORM\JoinColumn(nullable=false)
     */
    
    private $IdType;

 
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
     * Set prix
     *
     * @param string $prix
     *
     * @return search
     */
    public function setPrix($prix)
    {
        $this->Prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->Prix;
    }

    /**
     * Set idLocalite
     *
     * @param \Akina\ImmobilierBundle\Entity\Localite $idLocalite
     *
     * @return search
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
     * Set idType
     *
     * @param \Akina\ImmobilierBundle\Entity\TypeBien $idType
     *
     * @return search
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
}
