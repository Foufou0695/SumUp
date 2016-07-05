<?php

namespace SU\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Account
 *
 * @ORM\Table(name="account")
 * @ORM\Entity(repositoryClass="SU\AccountBundle\Repository\AccountRepository")
 */
class Account
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
	 * @ORM\ManyToOne(targetEntity="SU\UserBundle\Entity\User", inversedBy="accounts")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $user;
	
	/**
	 * @ORM\OneToMany(targetEntity="SU\AccountBundle\Entity\Entry", mappedBy="account", cascade={"persist"})
	 */
	private $entries;

    /**
     * @var string
     *
     * @ORM\Column(name="acPriority", type="string", length=255)
     */
    private $acPriority;

    /**
     * @var int
     *
     * @ORM\Column(name="firstAmount", type="integer")
     */
    private $firstAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;


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
     * Set firstAmount
     *
     * @param integer $firstAmount
     *
     * @return Account
     */
    public function setFirstAmount($firstAmount)
    {
        $this->firstAmount = $firstAmount;

        return $this;
    }

    /**
     * Get firstAmount
     *
     * @return int
     */
    public function getFirstAmount()
    {
        return $this->firstAmount;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Account
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entries = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set user
     *
     * @param \SU\UserBundle\Entity\User $user
     *
     * @return Account
     */
    public function setUser(\SU\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \SU\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add entry
     *
     * @param \SU\AccountBundle\Entity\Entry $entry
     *
     * @return Account
     */
    public function addEntry(\SU\AccountBundle\Entity\Entry $entry)
    {
        $this->entries[] = $entry;
		$entry->setAccount($this);
    
        return $this;
    }

    /**
     * Remove entry
     *
     * @param \SU\AccountBundle\Entity\Entry $entry
     */
    public function removeEntry(\SU\AccountBundle\Entity\Entry $entry)
    {
        $this->entries->removeElement($entry);
    }

    /**
     * Get entries
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Set acPriority
     *
     * @param string $acPriority
     *
     * @return Account
     */
    public function setAcPriority($acPriority)
    {
        $this->acPriority = $acPriority;
    
        return $this;
    }

    /**
     * Get acPriority
     *
     * @return string
     */
    public function getAcPriority()
    {
        return $this->acPriority;
    }
}
