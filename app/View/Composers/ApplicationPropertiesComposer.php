<?php

namespace App\View\Composers;

use Illuminate\View\View;

class ApplicationPropertiesComposer
{

    /**
     * Sets env variables as global variable of views.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with([
            'applicationLocale' => app()->getLocale()
        ]);
    }
}
