<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Money extends Model
{
    use HasFactory, CrudTrait, SoftDeletes;

    protected $guarded = ['id'];
    public $timestamps = true;

    public const MONEY = 'money';

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }

    public function clientName()
    {
        return Client::where('id', $this->client_id)->first()->name;
    }

    public function currentSubscription()
    {
        $subscription = Subscription::where('id', $this->subscription_id)->first();
        return 'Сумма: ' . $subscription->amount . ', срок: ' . $subscription->term;
    }
}
