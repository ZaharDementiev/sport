<?php

namespace App\Http\Controllers\Admin;

use App\Models\Address;
use App\Models\Money;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class MoneyCrudController extends CrudController
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
        $this->crud->setModel(Money::class);
        $this->crud->allowAccess('show');
        $this->crud->setEntityNameStrings('Операция', 'Операции');
        $this->crud->setRoute(backpack_url('money'));
        $this->crud->denyAccess('create');
        $this->crud->denyAccess('update');
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
                'label' => 'Сумма',
                'type' => 'number',
            ],
            [
                'name' => 'client',
                'label' => 'Клиент',
                'type' => 'model_function',
                'function_name' => 'clientName',
                'limit' => 1000,
            ],
            [
                'name' => 'sub',
                'label' => 'Подписка',
                'type' => 'model_function',
                'function_name' => 'currentSubscription',
                'limit' => 1000,
            ],
            [
                'name' => 'created_at',
                'label' => 'Оплачено',
                'type' => 'datetime',
            ],
        ]);
    }
}
