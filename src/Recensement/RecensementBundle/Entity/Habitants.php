<?php

namespace Recensement\RecensementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Habitants
 *
 * @ORM\Table("habitants")
 * @ORM\Entity(repositoryClass="Recensement\RecensementBundle\Repository\HabitantsRepository")
 */
class Habitants
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="Recensement\RecensementBundle\Entity\Parents", cascade={"persist"})
     *
     */
    private $parents1;


    /**
     * @ORM\ManyToOne(targetEntity="Recensement\RecensementBundle\Entity\Parents", cascade={"persist"})
     *
     *
     */
    private $parents2;


    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=125)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=125)
     */
    private $prenom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sexe", type="boolean")
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="datetime")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=125)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=125)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="zone", type="string", length=125)
     */
    private $zone;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnregistrement", type="datetime")
     */
    private $dateEnregistrement;



    public function __construct()
    {
        $this->dateEnregistrement = new \DateTime();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Habitants
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
     * Set prenom
     *
     * @param string $prenom
     * @return Habitants
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
     * Set sexe
     *
     * @param boolean $sexe
     * @return Habitants
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return boolean
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Habitants
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Habitants
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
     * Set adresse
     *
     * @param string $adresse
     * @return Habitants
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set zone
     *
     * @param string $zone
     * @return Habitants
     */
    public function setZone($zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }


    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getNom();
    }

    /**
     * Set parents1
     *
     * @param \Recensement\RecensementBundle\Entity\Parents $parents1
     * @return Habitants
     */
    public function setParents1($parents1)
    {
        $this->parents1 = $parents1;

        return $this;
    }

    /**
     * Get parents1
     *
     * @return \Recensement\RecensementBundle\Entity\Parents 
     */
    public function getParents1()
    {
        return $this->parents1;
    }

    /**
     * Set parents2
     *
     * @param \Recensement\RecensementBundle\Entity\Parents $parents2
     * @return Habitants
     */
    public function setParents2($parents2)
    {
        $this->parents2 = $parents2;

        return $this;
    }

    /**
     * Get parents2
     *
     * @return \Recensement\RecensementBundle\Entity\Parents 
     */
    public function getParents2()
    {
        return $this->parents2;
    }

    /**
     * Set dateEnregistrement
     *
     * @param \DateTime $dateEnregistrement
     * @return Habitants
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return \DateTime 
     */
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }
}
