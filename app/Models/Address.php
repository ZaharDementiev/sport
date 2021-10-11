<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, CrudTrait, SoftDeletes;

    protected $guarded = ['id'];
    public $timestamps = true;

    public const ADDRESS = 'gym';

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id', 'gym_id')->get();
    }

    public static function getGyms()
    {
        $gyms = Address::all();
        $addresses = [];
        $count = 1;
        foreach ($gyms as $gym) {
            $addresses[$count] = $gym->city . ', ' . $gym->address;
            $count++;
        }
        return $addresses;
    }
}
