<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @var \DateTime
     *
     * @ORM\Column(name="DateContrat", type="date")
     */
    private $dateContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="Caution", type="string", length=30)
     */
    private $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="Duree", type="string", length=50)
     */
    private $duree;

    /**
     * @var int
     *
     * @ORM\Column(name="IdBien", type="integer")
     */
    private $idBien;

    /**
     * @var int
     *
     * @ORM\Column(name="IdClient", type="integer")
     */
    private $idClient;


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
     * Set dateContrat
     *
     * @param \DateTime $dateContrat
     *
     * @return Contrat
     */
    public function setDateContrat($dateContrat)
    {
        $this->dateContrat = $dateContrat;

        return $this;
    }

    /**
     * Get dateContrat
     *
     * @return \DateTime
     */
    public function getDateContrat()
    {
        return $this->dateContrat;
    }

    /**
     * Set caution
     *
     * @param string $caution
     *
     * @return Contrat
     */
    public function setCaution($caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get caution
     *
     * @return string
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Contrat
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set idBien
     *
     * @param integer $idBien
     *
     * @return Contrat
     */
    public function setIdBien($idBien)
    {
        $this->idBien = $idBien;

        return $this;
    }

    /**
     * Get idBien
     *
     * @return int
     */
    public function getIdBien()
    {
        return $this->idBien;
    }

    /**
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return Contrat
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}

