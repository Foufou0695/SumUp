<?php

namespace SU\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entry
 *
 * @ORM\Table(name="entry")
 * @ORM\Entity(repositoryClass="SU\AccountBundle\Repository\EntryRepository")
 */
class Entry
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
	 * @ORM\ManyToOne(targetEntity="SU\AccountBundle\Entity\Account", inversedBy="entries")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $account;
	
	/**
	 * @ORM\ManyToOne(targetEntity="SU\AccountBundle\Entity\Category", inversedBy="entries")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $category;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="paimentKind", type="string", length=255)
     */
    private $paimentKind;

    /**
     * @var string
     *
     * @ORM\Column(name="effective", type="string", length=255)
     */
    private $effective;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paimentDate", type="datetime")
     */
    private $paimentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * Set amount
     *
     * @param float $amount
     *
     * @return Entry
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set effective
     *
     * @param string $effective
     *
     * @return Entry
     */
    public function setEffective($effective)
    {
        $this->effective = $effective;

        return $this;
    }

    /**
     * Get effective
     *
     * @return string
     */
    public function getEffective()
    {
        return $this->effective;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Entry
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
     * Set account
     *
     * @param \SU\AccountBundle\Entity\Account $account
     *
     * @return Entry
     */
    public function setAccount(\SU\AccountBundle\Entity\Account $account)
    {
        $this->account = $account;
    
        return $this;
    }

    /**
     * Get account
     *
     * @return \SU\AccountBundle\Entity\Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set category
     *
     * @param \SU\AccountBundle\Entity\Category $category
     *
     * @return Entry
     */
    public function setCategory(\SU\AccountBundle\Entity\Category $category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \SU\AccountBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set paimentKind
     *
     * @param string $paimentKind
     *
     * @return Entry
     */
    public function setPaimentKind($paimentKind)
    {
        $this->paimentKind = $paimentKind;
    
        return $this;
    }

    /**
     * Get paimentKind
     *
     * @return string
     */
    public function getPaimentKind()
    {
        return $this->paimentKind;
    }

    /**
     * Set paimentDate
     *
     * @param \DateTime $paimentDate
     *
     * @return Entry
     */
    public function setPaimentDate($paimentDate)
    {
        $this->paimentDate = $paimentDate;
    
        return $this;
    }

    /**
     * Get paimentDate
     *
     * @return \DateTime
     */
    public function getPaimentDate()
    {
        return $this->paimentDate;
    }
}
