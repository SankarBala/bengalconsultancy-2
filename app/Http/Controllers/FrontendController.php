<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Country;
use App\Models\Query;
use App\Models\Subscription;
use Illuminate\Support\Facades\Session;
use App\Models\ContactForm;
use App\Models\Client;
use App\Models\UserStatus;
use App\Models\ClientStatus;
use App\Models\ComboPromo;
use App\Models\News;
use App\Models\Popular;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{

    public function __construct()
    {
        View::share('countries', Country::where('status', 'published')->orderBy('name', 'asc')->get());
        View::share('populars', Popular::where('active', true)->get());
    }

    public function clientStatus()
    {

        return view('frontend.status');
    }

    public function clientStatusCheck(Request $request)
    {

        $client = Client::where('client_id', $request->cid)->where('passport', $request->psn)->get();

        if ($client->count() == 0) {
            Session::flash('message', 'Client id and passport no does not match');
            return back();
        }


        View::share('client', $client[0]);
        View::share('userStatus', UserStatus::where('client_id', $client[0]->id)->get());
        View::share('clientStatus', ClientStatus::all());

        // dd($client[0]->id);
        // dd(UserStatus::where('client_id', $client[0]->id)->get()[0]->status());

        return view('frontend.statusShow');
    }




    public function index()
    {
        return view('frontend.index');
    }
    public function aboutUs()
    {
        return view('frontend.about');
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }

    public function country(Country $country)
    {
        View::share('sCountry', $country);
        return view('frontend.country');
    }


    public function popular(Popular $popular)
    {
        View::share('sPopular', $popular);
        return view('frontend.popular');
    }



    public function postQuery(Request $request)
    {

        $query = new Query();
        $query->name = $request->name;
        $query->email = $request->email;
        $query->phone = $request->phone;
        $query->message = $request->message;
        $query->country = $request->country;
        $query->save();

        Session::flash('message', 'Your query has been saved successfully');

        return redirect()->back();
    }

    public function subscription(Request $request)
    {
        $subscription = new Subscription();
        $subscription->email = $request->email;
        $subscription->save();

        Session::flash('message', 'Subscription successfull');

        return back();
    }

    public function contactForm(Request $request)
    {

        $contactForm = new ContactForm();
        $contactForm->name = $request->name;
        $contactForm->email = $request->email;
        $contactForm->phone = $request->phone;
        $contactForm->web = $request->web;
        $contactForm->message = $request->message;
        $contactForm->save();

        Session::flash('message', 'Request submited');
        return back();
    }

    public function promotional(Request $request, Popular $popular)
    {
        view()->share('popular', $popular);
        return view('frontend.promotional');
    }

    public function news()
    {
        view()->share('news', News::paginate(9));
        return view('frontend.news');
    }

    public function singleNews(Request $request, News $news)
    {
        view()->share('news', $news);
        return view('frontend.singleNews');
    }

    public function combo(Request $request, ComboPromo $combo)
    {
        view()->share('combo', $combo);
        return view('frontend.combo');
    }
}
