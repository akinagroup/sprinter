<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservations
 *
 * @ORM\Table(name="reservations")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\ReservationsRepository")
 */
class Reservations
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
     * @ORM\Column(name="DateReservation", type="date")
     */
    private $dateReservation;

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
     * @var bool
     *
     * @ORM\Column(name="Etat", type="boolean")
     */
    private $etat;


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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservations
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set idBien
     *
     * @param integer $idBien
     *
     * @return Reservations
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
     * @return Reservations
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

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Reservations
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
}

