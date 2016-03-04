<?php

namespace App\HomepageModule\Presenters;

class HomepagePresenter extends \App\Core\Presenters\BasePresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

}
