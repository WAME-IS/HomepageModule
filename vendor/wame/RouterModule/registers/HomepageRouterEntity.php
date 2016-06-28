<?php

namespace Wame\HomepageModule\Vendor\Wame\RouterRepository\Registers;

use Wame\RouterModule\Entities\RouterEntity;

/**
 * @author Dominik Gmiterko <ienze@ienze.me>
 */
class HomepageRouterEntity {

	public static function create() {
		$entity = new RouterEntity();
		$entity->route = "/[<lang>/][<module>/][<presenter>/][<action>/][<id>]";
		$entity->module = "Homepage";
		$entity->presenter = "Homepage";
		$entity->action = "default";
		$entity->defaults = [];
        $entity->params = [];
		$entity->sort = 0;
		$entity->sitemap = true;
		$entity->status = 1;
		return $entity;
	}

}
