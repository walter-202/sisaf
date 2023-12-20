<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model implements \OwenIt\Auditing\Contracts\Audit
{
    use \OwenIt\Auditing\Audit;

    /**
     * {@inheritdoc}
     */
    protected $guarded = [];
    public $disable_export= true;

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'old_values'   => 'json',
        'new_values'   => 'json',
    ];

    public function getSerializedDate($date)
    {
        return $this->serializeDate($date);
    }
}
