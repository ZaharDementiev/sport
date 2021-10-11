<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, CrudTrait, SoftDeletes;

    protected $guarded = ['id'];
    public $timestamps = true;

    public const CLIENT = 'client';

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }

    public function userGym()
    {
        $gym = Address::where('id', $this->gym_id)->first();
        if ($gym) {
            return $gym->city . ', ' . $gym->address;
        }
        return 'Не указано';
    }

    public function userTrainer()
    {
        $user = User::where('id', $this->trainer_id)->first();
        if ($user) {
            return $user->name;
        }
        return 'Не указано';
    }
}
