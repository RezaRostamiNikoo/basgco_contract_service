<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['prefix' => '/api/contracts'], function () use ($router) {

    $router->get('/', ['uses' => 'ContractController@index']);
    $router->get('/{contract}/detail', ['uses' => 'ContractController@detail']);
    $router->post('/store', ['uses' => 'ContractController@store']);
    $router->post('/{contract}/update', ['uses' => 'ContractController@update']);
    $router->delete('/{contract}/delete', ['uses' => 'ContractController@delete']);

    // items
    $router->group(['prefix' => '/{contract}/items'], function () use ($router) {
        $router->get('/', ['uses' => 'ContractItemsController@index']);
        $router->post('/store', ['uses' => 'ContractItemsController@store']);
        $router->post('/{item}/update', ['uses' => 'ContractItemsController@update']);
        $router->delete('/{item}/delete', ['uses' => 'ContractItemsController@delete']);
    });

    // deductions
    $router->group(['prefix' => '/{contract}/deductions'], function () use ($router) {
        $router->get('/', ['uses' => 'ContractDeductionController@index']);
        $router->post('/store', ['uses' => 'ContractDeductionController@store']);
        $router->post('/{deduction}/update', ['uses' => 'ContractDeductionController@update']);
        $router->delete('/{deduction}/delete', ['uses' => 'ContractDeductionController@delete']);
    });
});

