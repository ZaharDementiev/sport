<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Client;
use App\Models\Money;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function make(Request $request)
    {
        $client = Client::where('id', $_COOKIE[Client::CLIENT])->first();
        $client->payed = Carbon::now();
        $sub = Subscription::where('id', $request->input('id'))->first();
        $client->next_payment = Carbon::now()->addMonths($sub->term);
        $client->save();

        setcookie(Subscription::SUBSCRIPTION, $sub->id, time() + 7200, '/');

        return redirect()->route('gyms');
    }
}
