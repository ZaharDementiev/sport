<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserCrudRequest;
use App\Models\Address;
use App\Models\Client;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class GymClientCrudController extends ClientCrud
{
    function mainSettingsSetup()
    {
        $this->crud->setRoute(backpack_url('gym-clients'));
        $trainers = User::where('type', User::TRAINER)->where('gym_id', backpack_user()->gym_id)->pluck('id')->toArray();
        $this->crud->addClause('whereIn', 'trainer_id', $trainers);
    }

    public function fieldsSetup()
    {
        $this->crud->addColumns([
//            [
//                'name' => 'gym',
//                'label' => 'Зал',
//                'type' => 'model_function',
//                'function_name' => 'userGym',
//                'limit' => 1000,
//            ],
            [
                'name' => 'trainer',
                'label' => 'Тренер',
                'type' => 'model_function',
                'function_name' => 'userTrainer',
                'limit' => 1000,
            ],
        ]);
        return $this->crud;
    }
}
