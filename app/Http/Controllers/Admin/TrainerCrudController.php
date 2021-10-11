<?php


namespace App\Http\Controllers\Admin;


use App\Models\User;

class TrainerCrudController extends UserCrud
{
    function mainSettingsSetup()
    {
        $this->crud->setEntityNameStrings('Тренер', 'Тренера');
        $this->crud->setRoute(backpack_url('trainers'));

        $this->crud->addClause('where', 'type', User::TRAINER);
    }
}
