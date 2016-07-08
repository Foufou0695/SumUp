<?php
// src/SU/AccountBundle/AccountService/SUAccountService.php

namespace SU\AccountBundle\AccountService;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

use SU\AccountBundle\Entity\Account;
use SU\AccountBundle\Entity\Category;
use SU\AccountBundle\Entity\Entry;

class SUAccountService {
	
	private $container;
	
	public function __construct(Container $container) {
		$this->container = $container;
	}
	
	public function getPrincipalAccount($user) {
		foreach ($user->getAccounts() as $account) {
			if ($account->getAcPriority() == "Principal") {
				return $account;
			}
		}
		return $user->getAccounts()[0];
	}
	
	public function getAccountByName($user, $name) {
		foreach ($user->getAccounts() as $account) {
			if ($account->getName() == $name) {
				return $account;
			}
		}
		return null;
	}
	
	public function sumEntries($entries) {
		$res = 0;
		foreach($entries as $entry) {
			$res += $entry->getAmount();
		}
		return $res;
	}
}