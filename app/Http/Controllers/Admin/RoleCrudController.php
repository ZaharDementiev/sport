<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\PermissionManager\app\Models\Role;

class RoleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Role::class);
        $this->crud->allowAccess('show');
        $this->crud->setEntityNameStrings('Роль', 'Роли');
        $this->crud->setRoute(backpack_url('user/roles'));
    }

    public function setupCreateOperation()
    {
        $this->addUserFields();
    }

    public function setupUpdateOperation()
    {
        $this->addUserFields();
    }

    public function store()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->unsetValidation();

        return $this->traitStore();
    }

    public function update()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->unsetValidation();

        return $this->traitUpdate();
    }

    public function setupListOperation()
    {
        $this->crud->setColumns([
            [
                'name' => 'name',
                'label' => 'Имя',
                'type' => 'text',
            ],
        ]);
    }


    protected function addUserFields()
    {
        $this->crud->addFields([
            [
                'name' => 'name',
                'label' => 'Имя',
                'type' => 'text',
            ],
        ]);
    }
}
