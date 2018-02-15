<?php

namespace Akina\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="Akina\ImmobilierBundle\Repository\ImageRepository")
 */
class Image
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
     * @ORM\Column(name="NomImage", type="string", length=40)
     */
    private $nomImage;

    /**
     * @var string
     *
     * @ORM\Column(name="Taille", type="string", length=30)
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=30)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=25)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="BlobImage", type="blob", nullable=true)
     */
    private $blobImage;

   
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
     * Set nomImage
     *
     * @param string $nomImage
     *
     * @return Image
     */
    public function setNomImage($nomImage)
    {
        $this->nomImage = $nomImage;

        return $this;
    }

    /**
     * Get nomImage
     *
     * @return string
     */
    public function getNomImage()
    {
        return $this->nomImage;
    }

    /**
     * Set taille
     *
     * @param string $taille
     *
     * @return Image
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Image
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Image
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
     * Set blobImage
     *
     * @param string $blobImage
     *
     * @return Image
     */
    public function setBlobImage($blobImage)
    {
        $this->blobImage = $blobImage;

        return $this;
    }

    /**
     * Get blobImage
     *
     * @return string
     */
    public function getBlobImage()
    {
        return $this->blobImage;
    }
}

