<?php

namespace App\AdminModule\Presenters;

use Wame\MenuModule\Forms\MenuItemForm;

class HomepagePresenter extends \App\AdminModule\Presenters\BasePresenter
{	
	/** @var MenuItemForm @inject */
	public $menuItemForm;


	/**
	 * Homepage menu item form
	 * 
	 * @return MenuItemForm
	 */
	protected function createComponentHomepageMenuItemForm()
	{
		$form = $this->menuItemForm
						->setActionForm('homepageMenuItemForm')
						->setType('homepage')
						->setId($this->id)
						->addFormContainer(new \Wame\HomepageModule\Vendor\Wame\MenuModule\Components\MenuManager\Forms\HomepageFormContainer(), 'HomepageFormContainer', 50)
						->build();

		return $form;
	}
	
	
	public function renderMenuItem()
	{
		if ($this->id) {
			$this->template->siteTitle = _('Edit homepage item in menu');
		} else {
			$this->template->siteTitle = _('Add homepage item to menu');
		}
	}

}
