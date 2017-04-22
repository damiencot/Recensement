<?php

namespace Recensement\RecensementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parents
 *
 * @ORM\Table("parents")
 * @ORM\Entity(repositoryClass="Recensement\RecensementBundle\Repository\ParentsRepository")
 */
class Parents
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
     * @ORM\OneToMany(targetEntity="Recensement\RecensementBundle\Entity\Habitants", mappedBy="$parents1", cascade={"persist","remove"})
     * @ORM\OneToMany(targetEntity="Recensement\RecensementBundle\Entity\Habitants", mappedBy="$parents2", cascade={"persist","remove"})
     */
    private $habitants;

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
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="datetime")
     */
    private $dateNaissance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sexe", type="boolean")
     */
    private $sexe;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->habitants = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Parents
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
     * @return Parents
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
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Parents
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
     * Set sexe
     *
     * @param boolean $sexe
     * @return Parents
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
     * Add habitants
     *
     * @param \Recensement\RecensementBundle\Entity\Habitants $habitants
     * @return Parents
     */
    public function addHabitant(\Recensement\RecensementBundle\Entity\Habitants $habitants)
    {
        $this->habitants[] = $habitants;

        return $this;
    }

    /**
     * Remove habitants
     *
     * @param \Recensement\RecensementBundle\Entity\Habitants $habitants
     */
    public function removeHabitant(\Recensement\RecensementBundle\Entity\Habitants $habitants)
    {
        $this->habitants->removeElement($habitants);
    }


    /**
     * Get habitants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHabitants()
    {
        return $this->habitants;
    }
}
