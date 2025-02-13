<?php

namespace App\Http\Controllers;

use App\Models\ComboPromo;
use App\Models\Popular;
use Illuminate\Http\Request;

class ComboPromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('combos', ComboPromo::paginate(10));
        return view('admin.combo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        view()->share('populars', Popular::all());
        return view('admin.combo.create');
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
            'name' => 'string|min:3|max:100|required',
            'image' => 'nullable|image:*|max:2000'
        ]);

        $comboPromo = new ComboPromo();
        $comboPromo->name = $request->name;
        $comboPromo->description = $request->description;
        $comboPromo->status = $request->active ? true : false;

        if ($request->file('image') !== null) {
            $comboPromo->image = $request->file('image')->store('public/uploads');
        }

        $comboPromo->save();

        $comboPromo->populars()->attach($request->populars);

        return redirect()->route('admin.combo.index')->with([
            'status' => 'success',
            'message' => 'Successfully added combo promotion'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComboPromo  $comboPromo
     * @return \Illuminate\Http\Response
     */
    public function show(ComboPromo $comboPromo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComboPromo  $comboPromo
     * @return \Illuminate\Http\Response
     */
    public function edit(ComboPromo $combo)
    {
        view()->share('comboPromo', $combo);
        view()->share('populars', Popular::all());
        view()->share('selectedPopulars', $combo->populars->pluck('id')->toArray());

        return view('admin.combo.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComboPromo  $comboPromo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComboPromo $combo)
    { 
        $request->validate([
            'name' => 'string|min:3|max:100|required',
            'image' => 'nullable|image:*|max:2000'
        ]);

        $combo->name = $request->name;
        $combo->description = $request->description;
        $combo->status = $request->active ? true : false;

        if ($request->file('image') !== null) {
            $combo->image = $request->file('image')->store('public/uploads');
        } 

        $combo->save();

        $combo->populars()->sync($request->populars);

        return redirect()->route('admin.combo.index')->with([
            'status' => 'success',
            'message' => 'Successfully updated combo promotion'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComboPromo  $comboPromo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComboPromo $combo)
    {
        $combo->delete();
        return redirect()->route('admin.combo.index')->with([
            'status' => 'danger',
            'message' => 'Successfully deleted combo promotion'
        ]);
    }
}
