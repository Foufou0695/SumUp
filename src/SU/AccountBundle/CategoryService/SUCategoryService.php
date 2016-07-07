<?php
// src/SU/AccountBundle/CategoryService/SUCategoryService.php

namespace SU\AccountBundle\CategoryService;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class SUCategoryService {
	
	private $container;
	
	public function __construct(Container $container) {
		$this->container = $container;
	}
	
	public function getCategoryByName($user, $name) {
		foreach($user->getCategories() as $category) {
			if ($category->getName() == $name) {
				return $category;
			}
		}
		return null;
	}
}