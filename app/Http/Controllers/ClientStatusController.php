<?php

namespace App\Http\Controllers;

use App\Models\ClientStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Country;

class ClientStatusController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->only('delete', 'edit');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->country) {
            $clientStatus = ClientStatus::where('country', $request->country)->get();
        } else {
            $clientStatus = ClientStatus::all();
        }
        
        View::share(['countries' => Country::all()]);

        return  view('admin.clientStatus.index')->withClientStatus($clientStatus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        View::share(['countries' => Country::all()]);
        return view('admin.clientStatus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientStatus = new ClientStatus();
        $clientStatus->title = $request->title;
        $clientStatus->description = $request->description;
        $clientStatus->color = $request->color;
        $clientStatus->country = $request->country;
        $clientStatus->save();
        return redirect()->route('admin.client-status.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientStatus  $clientStatus
     * @return \Illuminate\Http\Response
     */
    public function show(ClientStatus $clientStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientStatus  $clientStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientStatus $clientStatus)
    {
        View::share(['countries' => Country::all()]);
        View::share(['clientStatus' => $clientStatus]);
        return  view('admin.clientStatus.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientStatus  $clientStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientStatus $clientStatus)
    {
        $clientStatus->title = $request->title;
        $clientStatus->description = $request->description;
        $clientStatus->color = $request->color;
        $clientStatus->country = $request->country;
        $clientStatus->save();
        return redirect()->route('admin.client-status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientStatus  $clientStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientStatus $clientStatus)
    {
        $clientStatus->delete();
        return redirect()->route('admin.client-status.index');
    }
}
