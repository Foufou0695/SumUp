<?php

namespace SU\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SUUserBundle extends Bundle
{
	public function getParent() {
		return 'FOSUserBundle';
	}
}
