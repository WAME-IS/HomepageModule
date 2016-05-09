<?php

namespace Wame\HomepageModule\Vendor\Wame\RouterRepository\Registers;

use Wame\RouterModule\Entities\RouterEntity;

/**
 * @author Dominik Gmiterko <ienze@ienze.me>
 */
class HomepageRouterEntity {

	public function create() {
		$entity = new RouterEntity();
		$entity->route = "/";
		$entity->module = "Homepage";
		$entity->presenter = "Homepage";
		$entity->action = "default";
		$entity->defaults = [];
		$entity->sort = 999;
		$entity->sitemap = true;
		$entity->status = 1;
		return $entity;
	}

}
