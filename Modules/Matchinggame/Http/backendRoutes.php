<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/matchinggame'], function (Router $router) {
    $router->bind('matchinggame', function ($id) {
        return app('Modules\Matchinggame\Repositories\MatchingGameRepository')->find($id);
    });
    $router->get('matchinggames', [
        'as' => 'admin.matchinggame.matchinggame.index',
        'uses' => 'MatchingGameController@index',
        'middleware' => 'can:matchinggame.matchinggames.index'
    ]);
    $router->get('matchinggames/create', [
        'as' => 'admin.matchinggame.matchinggame.create',
        'uses' => 'MatchingGameController@create',
        'middleware' => 'can:matchinggame.matchinggames.create'
    ]);
    $router->post('matchinggames', [
        'as' => 'admin.matchinggame.matchinggame.store',
        'uses' => 'MatchingGameController@store',
        'middleware' => 'can:matchinggame.matchinggames.create'
    ]);
    $router->get('matchinggames/{matchinggame}/edit', [
        'as' => 'admin.matchinggame.matchinggame.edit',
        'uses' => 'MatchingGameController@edit',
        'middleware' => 'can:matchinggame.matchinggames.edit'
    ]);
    $router->put('matchinggames/{matchinggame}', [
        'as' => 'admin.matchinggame.matchinggame.update',
        'uses' => 'MatchingGameController@update',
        'middleware' => 'can:matchinggame.matchinggames.edit'
    ]);
    $router->delete('matchinggames/{matchinggame}', [
        'as' => 'admin.matchinggame.matchinggame.destroy',
        'uses' => 'MatchingGameController@destroy',
        'middleware' => 'can:matchinggame.matchinggames.destroy'
    ]);
// append

});
