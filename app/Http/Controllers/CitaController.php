<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Voyager\VoyagerBaseController as BaseVoyagerBaseController;
use App\Services\CitaService;
use Carbon\CarbonPeriod;
use App\Models\Servicios;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CitaController extends BaseVoyagerBaseController
{
    public function getDateTimes($serviceId)
    {
        try {
            Servicios::findOrFail($serviceId);
            $datePeriod = CarbonPeriod::create(now(), now()->addDays(7));
            $citas = [];
            foreach ($datePeriod as $date) {
                $citas[] = (new CitaService)->generateTimeData($date, $serviceId);
            }
            $filterCitas = array_filter($citas);
            $reordenar = array_values($filterCitas);
            return response()->json($reordenar);
        } catch (ModelNotFoundException) {
            return redirect()->route('voyager.citas.index')->with([
                'message'    => 'No existe el servicio',
                'alert-type' => 'error',
            ]);
        }
    }
}
