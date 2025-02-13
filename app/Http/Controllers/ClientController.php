<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientStatus;
use App\Models\Country;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

class ClientController extends Controller
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
    public function index()
    {
        View::share(['clientStatus' => ClientStatus::all()]);
        View::share(['clients' => Client::paginate(10)]);
        return view('admin.client.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        View::share(['countries' => Country::all()]);
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd(ClientStatus::where('country', $request->preferred_country)->first()->id);

        $cCountry = Country::find($request->preferred_country);
        $cCode = $cCountry->code;
        $year = Carbon::now()->format('Y');


        $client = new Client();

        $client->name = $request->name;
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->fname = $request->fname;
        $client->mname = $request->mname;
        $client->bid = $request->bid;
        $client->dob = $request->dob;
        $client->nid = $request->nid;
        $client->passport = $request->passport;
        if ($request->file('image') !== null) {
            $client->image = $request->file('image')->store('public/client');
        }
        $client->preferred_country = $request->preferred_country;
        $client->address = $request->address;
        $client->status = ClientStatus::where('country', $request->preferred_country)->first()->id; //$request->status;
        $client->save();

        $userStatus = new UserStatus();
        $userStatus->client_id = $client->id;
        $userStatus->status_id = $client->status;
        $userStatus->save();


        $client->client_id = $cCode . $year . ($client->id + 1500);

        if ($request->hasFile('attachments')) {
            $names = [];
            foreach ($request->file('attachments') as $image) {
                $destinationPath = 'storage/attachments/' . $client->client_id . '/';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                array_push($names, $filename);
            }
            $client->attachments = json_encode($names);
        }


        $client->update();

        return redirect()->route('admin.client.show', $client);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        View::share(['clientStatus' => ClientStatus::where('country', $client->preferred_country)->get()]);
        return view('admin.client.show')->withClient($client)->withPreferredContry(Country::find($client->preferred_country));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        View::share(['clientStatus' => ClientStatus::where('country', $client->preferred_country)->get()]);
        View::share(['countries' => Country::all()]);
        return view('admin.client.edit')->withClient($client)->withPreferredContry(Country::find($client->preferred_country));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {

        if ($client->status != $request->status) {
            $userStatus = new UserStatus();
            $userStatus->client_id = $client->id;
            $userStatus->status_id = $request->status;
            $userStatus->save();
        }


        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->fname = $request->fname;
        $client->mname = $request->mname;
        $client->bid = $request->bid;
        $client->dob = $request->dob;
        $client->nid = $request->nid;
        $client->passport = $request->passport;
        if ($request->file('image') !== null) {
            $client->image = $request->file('image')->store('public/client');
        }
        // $client->preferred_country = $request->preferred_country;
        $client->address = $request->address;
        $client->status = $request->status;
        $client->status_message = $request->statusMessage;


        if ($request->hasFile('attachments')) {
            $names = [];
            foreach ($request->file('attachments') as $image) {
                $destinationPath = 'storage/attachments/' . $client->client_id . '/';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                array_push($names, $filename);
            }
            $client->attachments = json_encode($names);
        }


        $client->save();

        return redirect()->route('admin.client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.client.index');
    }
}
