<?php

namespace App\Http\Controllers;

use App\Models\Popular;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PopularController extends Controller
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
        $populars = Popular::all();

        return  view('admin.populars.index')->withPopulars($populars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.populars.create');
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
            'popular' => [
                'required',
                'string'
            ],
            'countryBangla' => [
                'required',
                'string'
            ],

        ]);


        $popular = new Popular();

        if ($request->file('flag') !== null) {
            $popular->national_flag = $request->file('flag')->store('public/uploads');
        }
        if ($request->file('banner') !== null) {
            $popular->banner = $request->file('banner')->store('public/uploads');
        }
        if ($request->file('banner2') !== null) {
            $popular->banner_2 = $request->file('banner2')->store('public/uploads');
        }

        $popular->name = $request->popular;
        $popular->nameBangla = $request->countryBangla;
        $popular->content = $request->content;
        $popular->contentBangla = $request->contentBangla;
        $popular->active = $request->active ? true : false;

        $popular->save();

        return redirect()->route('admin.popular.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function show(Popular $popular)
    {
        // return  view('admin.populars.show');

        return $popular;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function edit(Popular $popular)
    {
        return  view('admin.populars.edit')->withPopular($popular);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Popular $popular)
    {

        if ($request->file('flag') !== null) {
            $popular->national_flag = $request->file('flag')->store('public/uploads');
        }
        if ($request->file('banner') !== null) {
            $popular->banner = $request->file('banner')->store('public/uploads');
        }
        if ($request->file('banner2') !== null) {
            $popular->banner_2 = $request->file('banner2')->store('public/uploads');
        }

        $popular->name = $request->popular;
        $popular->nameBangla = $request->countryBangla;
        $popular->content = $request->content;
        $popular->contentBangla = $request->contentBangla;
        $popular->active = $request->active ? true : false;

        $popular->save();
        return redirect()->route('admin.popular.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Popular  $popular
     * @return \Illuminate\Http\Response
     */
    public function destroy(Popular $popular)
    {
        $popular->delete();
        return redirect()->route('admin.popular.index');
    }
}
