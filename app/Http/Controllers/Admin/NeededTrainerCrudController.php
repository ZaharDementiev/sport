<?php


namespace App\Http\Controllers\Admin;


use App\Models\User;

class NeededTrainerCrudController extends UserCrud
{
    function mainSettingsSetup()
    {
        $this->crud->setEntityNameStrings('Тренер', 'Тренера');
        $this->crud->setRoute(backpack_url('needed-trainers'));

        $this->crud->addClause('where', 'type', User::TRAINER);
        $this->crud->addClause('where', 'gym_id', backpack_user()->gym_id);
    }
}
