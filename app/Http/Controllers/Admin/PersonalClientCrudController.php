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

class PersonalClientCrudController extends ClientCrud
{
    function mainSettingsSetup()
    {
        $this->crud->denyAccess('delete');
        $this->crud->denyAccess('update');
        $this->crud->addClause('where', 'trainer_id', backpack_user()->id);
        $this->crud->setRoute(backpack_url('personal-clients'));
    }

    public function fieldsSetup()
    {
        return $this->crud;
    }
}
