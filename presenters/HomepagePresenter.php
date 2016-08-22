<?php

namespace App\HomepageModule\Presenters;

use App\Core\Presenters\BasePresenter;

class HomepagePresenter extends BasePresenter
{
    
    public function renderDefault()
    {
        $this->template->siteTitle = _('Home');
    }
    
}
