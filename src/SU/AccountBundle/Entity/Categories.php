<?php

namespace SU\AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="SU\AccountBundle\Repository\CategoriesRepository")
 */
class Categories
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
	 * @ORM\OneToMany(targetEntity="SU\AccountBundle\Entity\Category", mappedBy="categories", cascade={"persist"})
	 */
	private $categoryList;
	
	/**
	 * @ORM\OneToOne(targetEntity="SU\UserBundle\Entity\User", mappedBy="categories", cascade={"persist"})
	 */
	private $user;

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
     * Set user
     *
     * @param \SU\UserBundle\Entity\User $user
     *
     * @return Categories
     */
    public function setUser(\SU\UserBundle\Entity\User $user = null)
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
     * Constructor
     */
    public function __construct()
    {
        $this->categoryList = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add categoryList
     *
     * @param \SU\AccountBundle\Entity\Category $categoryList
     *
     * @return Categories
     */
    public function addCategoryList(\SU\AccountBundle\Entity\Category $category)
    {
        $this->categoryList[] = $category;
		$category->setCategories($this);
    
        return $this;
    }

    /**
     * Remove categoryList
     *
     * @param \SU\AccountBundle\Entity\Category $categoryList
     */
    public function removeCategoryList(\SU\AccountBundle\Entity\Category $categoryList)
    {
        $this->categoryList->removeElement($categoryList);
    }

    /**
     * Get categoryList
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategoryList()
    {
        return $this->categoryList;
    }
}
