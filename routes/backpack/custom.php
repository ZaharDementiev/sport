<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('trainers', 'TrainerCrudController');
    Route::crud('managers', 'ManagerCrudController');
    Route::crud('gyms', 'AddressesCrudController');
    Route::crud('clients', 'ClientCrudController');
    Route::crud('subscriptions', 'SubscriptionCrudController');
    Route::crud('money', 'MoneyCrudController');
    Route::crud('personal-clients', 'PersonalClientCrudController');
    Route::crud('needed-trainers', 'NeededTrainerCrudController');
    Route::crud('gym-clients', 'GymClientCrudController');
    Route::crud('user/roles', 'RoleCrudController');
}); // this should be the absolute last line of this file
