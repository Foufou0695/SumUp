<?php
// src/SU/AccountBundle/AccountService/SUAccountService.php

namespace SU\AccountBundle\AccountService;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

use SU\AccountBundle\Entity\Account;
use SU\AccountBundle\Entity\Category;
use SU\AccountBundle\Entity\Entry;
use SU\AccountBundle\Entity\History;

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
	
	public function createMonthPdf($rawData, $dateTemp) {
		$cover = $this->container->get("templating")->render("SUAccountBundle:Account:cover.html.twig", array("dateTemp" => $dateTemp));
		$html = $this->container->get("templating")->render("SUAccountBundle:Account:accountTemplate.html.twig", array("dateTemp" => $dateTemp));
		$graph = $this->container->get("templating")->render("SUAccountBundle:Account:graphTemplate.html.twig", array("rawData" => $rawData, "dateTemp" => $dateTemp));
		return array($cover, $html, $graph);
	}
	
	public function getHistoryByDate(\Datetime $date, Account $account) {
		foreach($account->getStories() as $history) {
			$storyDate = new \Datetime($history->getAmountDate()->format('Y-m')."-01");
			if ($date->getTimeStamp() >= $storyDate->getTimeStamp()) {
				$storyDate->modify("+1 Month");
				$storyDate->modify("-1 Day");
				if ($date->getTimeStamp() <= $storyDate->getTimeStamp()) {
					return $history;
				}
			}
		}
		$history = new History();
		$history->setAmount(100000000000000);
		return $history;
	}
	
	public function addSystematicOperations(Account $account, $systematicOperations) {
		foreach($systematicOperations as $operation) {
			$entry = new Entry();
			$paimentDate = new \DateTime($operation->getPaimentDate()->format('Y-m-d'));
			$paimentDate->modify("+1 Month");
			
			$entry->setAmount($operation->getAmount());
			$entry->setPaimentKind($operation->getPaimentKind());
			$entry->setEffective($operation->getEffective());
			$entry->setPaimentDate($paimentDate);
			$entry->setDescription($operation->getDescription());
			$entry->setCategory($operation->getCategory());
			
			$account->addEntry($entry);
		}
	}
}