<?php

namespace Recensement\RecensementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Thouars
 *
 * @ORM\Table("thouars")
 * @ORM\Entity(repositoryClass="Recensement\RecensementBundle\Repository\ThouarsRepository")
 */
class Thouars
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
     * @var string
     *
     * @ORM\Column(name="zone", type="string", length=45)
     */
    private $zone;


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
     * Set zone
     *
     * @param string $zone
     * @return Thouars
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
        return $this->getZone();
    }
}
