<?php

namespace SU\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table(name="history")
 * @ORM\Entity(repositoryClass="SU\AccountBundle\Repository\HistoryRepository")
 */
class History
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
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;
	
	/**
	 * @ORM\ManyToOne(targetEntity="SU\AccountBundle\Entity\Account", inversedBy="stories")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $account;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="amountDate", type="datetime")
     */
    private $amountDate;


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
     * @return History
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
     * Set amountDate
     *
     * @param \DateTime $amountDate
     *
     * @return History
     */
    public function setAmountDate($amountDate)
    {
        $this->amountDate = $amountDate;

        return $this;
    }

    /**
     * Get amountDate
     *
     * @return \DateTime
     */
    public function getAmountDate()
    {
        return $this->amountDate;
    }

    /**
     * Set account
     *
     * @param \SU\AccountBundle\Entity\Account $account
     *
     * @return History
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
}
