<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Voyager\VoyagerBaseController as BaseVoyagerBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController  extends BaseVoyagerBaseController
{
    public function profile(Request $request)
    {
        $route = '';
        $dataType = Voyager::model('DataType')->where('model_name', Auth::guard(app('VoyagerGuard'))->getProvider()->getModel())->first();
        if (!$dataType && app('VoyagerGuard') == 'web') {
            $route = route('voyager.users.edit', Auth::user()->getKey());
        } elseif ($dataType) {
            $route = route('voyager.'.$dataType->slug.'.edit', Auth::user()->getKey());
        }

        return Voyager::view('voyager::profile', compact('route'));
    }

    // POST BR(E)AD
    public function update(Request $request, $id)
    {
        if (Auth::user()->getKey() == $id) {
            $request->merge([
                'role_id' => Auth::user()->role_id,
            ]);
        }

        return parent::update($request, $id);
    }
}
