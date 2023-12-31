<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class MyAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Crear Historia Clínica';
    }

    public function getIcon()
    {
        return 'voyager-documentation';
    }
    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'citas';
    }
    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('my.route');
    }
}
