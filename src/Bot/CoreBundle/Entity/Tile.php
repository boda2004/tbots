<?php

namespace Bot\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tile
 *
 * @ORM\Table(name="tile")
 * @ORM\Entity
 */
class Tile
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
     * @ORM\Column(name="coordinate", type="string")
     */
    protected $coordinate;

    /**
     * @var integer
     * @ORM\Column(name="credits", type="integer")
     */
    protected $credits;

    /**
     * @var string
     * @ORM\Column(name="faction", type="string")
     */
    protected $faction;

    /**
     * @var integer
     * @ORM\Column(name="decks_count", type="integer")
     */
    protected $decksCount;

    /**
     * @var integer
     * @ORM\Column(name="min_energy_need", type="integer")
     */
    protected $minEnergyNeed;

    /**
     * @var integer
     * @ORM\Column(name="is_active", type="integer")
     */
    protected $isActive;

    /**
     * @var integer
     * @ORM\Column(name="last_attack_time", type="integer")
     */
    protected $lastAttackTime;

    /**
     * @var integer
     * @ORM\Column(name="created_time", type="integer")
     */
    protected $createdTime;

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
     * Set coordinate
     *
     * @param string $coordinate
     * @return Tile
     */
    public function setCoordinate($coordinate)
    {
        $this->coordinate = $coordinate;
    
        return $this;
    }

    /**
     * Get coordinate
     *
     * @return string 
     */
    public function getCoordinate()
    {
        return $this->coordinate;
    }

    /**
     * Set credits
     *
     * @param integer $credits
     * @return Tile
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;
    
        return $this;
    }

    /**
     * Get credits
     *
     * @return integer 
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set faction
     *
     * @param string $faction
     * @return Tile
     */
    public function setFaction($faction)
    {
        $this->faction = $faction;
    
        return $this;
    }

    /**
     * Get faction
     *
     * @return string 
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * Set decksCount
     *
     * @param integer $decksCount
     * @return Tile
     */
    public function setDecksCount($decksCount)
    {
        $this->decksCount = $decksCount;
    
        return $this;
    }

    /**
     * Get decksCount
     *
     * @return integer 
     */
    public function getDecksCount()
    {
        return $this->decksCount;
    }

    /**
     * Set minEnergyNeed
     *
     * @param integer $minEnergyNeed
     * @return Tile
     */
    public function setMinEnergyNeed($minEnergyNeed)
    {
        $this->minEnergyNeed = $minEnergyNeed;
    
        return $this;
    }

    /**
     * Get minEnergyNeed
     *
     * @return integer 
     */
    public function getMinEnergyNeed()
    {
        return $this->minEnergyNeed;
    }

    /**
     * Set isActive
     *
     * @param integer $isActive
     * @return Tile
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return integer 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set lastAttackTime
     *
     * @param integer $lastAttackTime
     * @return Tile
     */
    public function setLastAttackTime($lastAttackTime)
    {
        $this->lastAttackTime = $lastAttackTime;
    
        return $this;
    }

    /**
     * Get lastAttackTime
     *
     * @return integer 
     */
    public function getLastAttackTime()
    {
        return $this->lastAttackTime;
    }

    /**
     * Set createdTime
     *
     * @param integer $createdTime
     * @return Tile
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
    
        return $this;
    }

    /**
     * Get createdTime
     *
     * @return integer 
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }
}