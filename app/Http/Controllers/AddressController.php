<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Client;
use App\Models\Money;
use App\Models\Subscription;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function choose($id)
    {
        $gym = Address::where('id', $id)->first();
        if (!isset($_COOKIE[Client::CLIENT])) {
            return redirect('/');
        }
//        $client = Client::where('id', $_COOKIE[Client::CLIENT])->first();
//        $client->gym_id = $gym->id;
//        $client->save();
        setcookie(Address::ADDRESS, $gym->id, time() + 7200, '/');
        if (isset($_COOKIE[Subscription::SUBSCRIPTION])) {
            return redirect()->route('staff');
        }
        return redirect()->route('pricing');
    }
}
