<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserCrudRequest;
use App\Models\Address;
use App\Models\Subscription;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class SubscriptionCrudController extends CrudController
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
        $this->crud->setModel(Subscription::class);
        $this->crud->allowAccess('show');
        $this->crud->setEntityNameStrings('Абонемент', 'Абонементы');
        $this->crud->setRoute(backpack_url('subscriptions'));
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
                'name' => 'amount',
                'label' => 'Сумма в $',
                'type' => 'number',
            ],
            [
                'name' => 'term',
                'label' => 'Срок',
                'type' => 'number',
            ],
        ]);
    }

    protected function addUserFields()
    {
        $this->crud->addFields([
            [
                'name' => 'amount',
                'label' => 'Сумма в $',
                'type' => 'number',
            ],
            [
                'name' => 'term',
                'label' => 'Срок',
                'type' => 'number',
            ],
        ]);
    }
}
