<?php

namespace App\Http\Controllers;
use Auth;
use App\Code;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Service;

class CodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return view('codes.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
