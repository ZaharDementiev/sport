<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\Tests\Unit\Models\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, CrudTrait, HasRoles, SoftDeletes;

    protected $guarded = ['id'];
    public $timestamps = true;
    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];

    public const EVEN = "ПН, СР, ПТ";
    public const ODD = "ВТ, ЧТ, СБ";

    public const TRAINER = 0;
    public const MANAGER = 1;
    public const ADMIN = 2;

    public function workingDays()
    {
        return $this->working_day_type == 0 ? self::EVEN : self::ODD;
    }

    public function gymAddress()
    {
        $gym = Address::where('id', $this->gym_id)->first();
        return $gym->city . ', ' . $gym->address;
    }

    public function userGym()
    {
        return $this->hasOne(Address::class, 'id', 'gym_id')->first();
    }

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }

    public function trainers()
    {
        $trainers = User::where('type', self::TRAINER)->where('gym_id', $this->gym_id)->get();
        $addresses = [];
        $count = 1;
        foreach ($trainers as $trainer) {
            $addresses[$count] = $trainer->name;
            $count++;
        }
        return $addresses;
    }

    public function getRole()
    {
        return DB::table('roles')->where('id', $this->type + 1)->first();
    }
}
