<?php

namespace App\VoyagerExcel\Exports;

abstract class AbstractExport
{
    abstract public function __construct($dataType, array $ids);
}
