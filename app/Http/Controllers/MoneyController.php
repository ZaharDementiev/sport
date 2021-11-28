<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Money;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoneyController extends Controller
{
    public function make($id)
    {
        $trainer = User::where('id', $id)->first();
        $sub = Subscription::where('id', $_COOKIE[Subscription::SUBSCRIPTION])->first();
        $client = Client::where('id', $_COOKIE[Client::CLIENT])->first();
        $money = new Money();
//        $money->amount = $sub->amount;
        $money->client_id = $client->id;
        $money->subscription_id = $sub->id;
        $money->save();

        $client->trainer_id = $trainer->id;
        $client->save();

        $sql = "INSERT INTO client_trainer (client_id, trainer_id) VALUES (" . $client->id . ", " . $trainer->id . ")";
        DB::insert($sql);

        return redirect()->route('time');
    }
}
