<?php


namespace App\Http\Controllers\Admin;


use App\Models\User;

class ManagerCrudController extends UserCrud
{
    function mainSettingsSetup()
    {
        $this->crud->setEntityNameStrings('Менеджер', 'Менеджеры');
        $this->crud->setRoute(backpack_url('managers'));

        $this->crud->addClause('where', 'type', User::MANAGER);
    }
}
