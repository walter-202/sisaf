<?php

namespace App\Http\Controllers;
use App\Models\Audit;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    public function index()
    {
        $audits = Audit::find(1)->audits;
        return view('vendor.voyager.browse' , compact('audits'));
    }
}
