<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class CrearHistoria extends AbstractAction
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
        return 'create';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-md btn-success pull-right',
            'data-id' => $this->data->{$this->data->getKeyName()},
            'id'      => 'delete-'.$this->data->{$this->data->getKeyName()},
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.historias.index');
    }
}
