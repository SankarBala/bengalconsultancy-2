<?php

namespace App\Exports;

use App\Models\Client;
use App\Models\ClientStatus;
use App\Models\Country;
use App\Models\UserStatus;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    public function view(): View
    {
        return view('exports.clients', [
            'clients' => Client::all(),
            'clientStatus' => ClientStatus::all(),
            'userStatus' => UserStatus::all(),
            'countries' => Country::all(),
        ]);
    }
}
