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
	private $categories;

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
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add category
     *
     * @param \SU\AccountBundle\Entity\Category $category
     *
     * @return Categories
     */
    public function addCategory(\SU\AccountBundle\Entity\Category $category)
    {
        $this->categories[] = $category;
		$category->setCategories($this);
    
        return $this;
    }

    /**
     * Remove category
     *
     * @param \SU\AccountBundle\Entity\Category $category
     */
    public function removeCategory(\SU\AccountBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
