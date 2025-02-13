<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ContactFormController extends Controller
{
    public function index()
    {
        View::share(['queries' => ContactForm::paginate()]);
        return view('admin.contactRequest');
    }

    public function show(ContactForm $contactRequest)
    {

        View::share(['query' => $contactRequest]);
        $contactRequest->status = "Seen";
        $contactRequest->save();

        return view('admin.contactRequestShow');
    }

    public function delete(ContactForm $contactRequest)
    {
        $contactRequest->delete();
        return back();
    }
}
