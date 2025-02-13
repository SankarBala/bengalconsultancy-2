<?php

namespace App\Http\Controllers;

use App\Models\HotCountry;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HotCountryController extends Controller
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
        $hotCountries = HotCountry::all();

        return  view('admin.hotCountries.index')->withHotCountries($hotCountries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.hotCountries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'hotCountry' => [
                'required',
                'string'
            ],
            'countryBangla' => [
                'required',
                'string'
            ],

        ]);


        $hotCountry = new HotCountry();

        if ($request->file('flag') !== null) {
            $hotCountry->national_flag = $request->file('flag')->store('public/uploads');
        }
        if ($request->file('banner') !== null) {
            $hotCountry->banner = $request->file('banner')->store('public/uploads');
        }
        if ($request->file('banner2') !== null) {
            $hotCountry->banner_2 = $request->file('banner2')->store('public/uploads');
        }

        $hotCountry->name = $request->hotCountry;
        $hotCountry->nameBangla = $request->countryBangla;
        $hotCountry->code = Str::upper($request->country_code);
        $hotCountry->content = $request->content;
        $hotCountry->contentBangla = $request->contentBangla;
        $hotCountry->status = $request->status;

        $hotCountry->save();

        return redirect()->route('admin.hotCountry.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HotCountry  $hotCountry
     * @return \Illuminate\Http\Response
     */
    public function show(HotCountry $hotCountry)
    {
        // return  view('admin.hotCountries.show');

        return $hotCountry;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HotCountry  $hotCountry
     * @return \Illuminate\Http\Response
     */
    public function edit(HotCountry $hotCountry)
    {
        return  view('admin.hotCountries.edit')->withHotCountry($hotCountry);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HotCountry  $hotCountry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HotCountry $hotCountry)
    {

        if ($request->file('flag') !== null) {
            $hotCountry->national_flag = $request->file('flag')->store('public/uploads');
        }
        if ($request->file('banner') !== null) {
            $hotCountry->banner = $request->file('banner')->store('public/uploads');
        }
        if ($request->file('banner2') !== null) {
            $hotCountry->banner_2 = $request->file('banner2')->store('public/uploads');
        }

        $hotCountry->name = $request->hotCountry;
        $hotCountry->nameBangla = $request->countryBangla;
        $hotCountry->content = $request->content;
        $hotCountry->contentBangla = $request->contentBangla;
        $hotCountry->status = $request->status;

        $hotCountry->save();
        return redirect()->route('admin.hotCountry.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HotCountry  $hotCountry
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotCountry $hotCountry)
    {
        $hotCountry->delete();
        return redirect()->route('admin.hotCountry.index');
    }
}
