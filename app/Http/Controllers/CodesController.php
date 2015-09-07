<?php

namespace App\Http\Controllers;
use Auth;
use App\Code;
use App\User;
use DB;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Service;

class CodesController extends Controller
{

    public function index()
    {
        $codes = [];
        $user = Auth::user();
        foreach($user->services as $service) {
            $codes[$service->id] = $service->pivot->referall_code;
        }
        
        return view('codes.index', compact('codes'));
    }

    /**
     * Create a new referall code
     *
     * @return Response
     */
    public function create()
    {
        $services = Service::lists('name', 'id');

        return view('codes.create', compact('services'));

    }

    /**
     * Store a newly created referall code.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $service = $request->input('service');
        $referall = $request->input('referall_code');
        $user->services()->attach($service, ['referall_code' => $referall]);
        return redirect('/');
    }



    /**
     * Edit a referall code
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        Session::put('service_id', $id);
        $user = Auth::user();
        $code = $user->services()->where('service_id', $id)->first()->pivot;
        return view('codes.edit', compact('code', 'service', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user()->id;
        $referall = $request->input('referall_code');
        $service = Session::get('service_id');
        $code = DB::table('service_user')
            ->where('user_id', $user)
            ->where('service_id', $service)
            ->update(['referall_code' => $referall]);

        return redirect('/codes');
    }

    public function show($id)
    {

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        return view('codes.destroy', compact('service'));
    }
}
