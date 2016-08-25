<?php

namespace App\HomepageModule\Presenters;

use App\Core\Presenters\BasePresenter;

class HomepagePresenter extends BasePresenter
{
    protected function startup()
    {
        parent::startup();
    }
    
    public function renderDefault()
    {
        $this->template->siteTitle = _('Home');
    }
    
}
