<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Query;
use Illuminate\Support\Facades\View;

class QueryController extends Controller
{
    public function index()
    {
        View::share(['queries' => Query::paginate()]);
        View::share(['countries' => Country::all()]);
        return view('admin.query');
    }

    public function show(Query $query)
    {
        View::share(['countries' => Country::all()]);
        View::share(['query' => $query]);
        $query->status = "Seen";
        $query->save();

        return view('admin.queryShow');
    }

    public function delete(Query $query)
    {
        $query->delete();
        return back();
    }
}
