<?php

namespace App\Http\Controllers;

use App\Service;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    /**
     * Shows all services
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $services = Service::all();

        return view('services.index', compact('services'));
    }

    public function show($id)
    {


    }

    /**
     * Retrieves a random referall code from the chosen service
     *
     * @param $id
     * @return mixed
     */
    public function selectRandomCode($id)
    {
        $code = DB::table('service_user')
            ->select('referall_code')
            ->where('service_id', '=', $id)
            ->orderByRaw("Rand()")
            ->first();

        return $code->referall_code;
    }
}
