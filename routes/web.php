<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function() use($router)
{
$router->get('technician-specialities','TechnicianSpecialityController@index');
$router->post('technician-specialities','TechnicianSpecialityController@store');
$router->get('technician-specialities/{speciality}','TechnicianSpecialityController@show');
$router->put('technician-specialities/{speciality}','TechnicianSpecialityController@update');
$router->patch('technician-specialities/{speciality}','TechnicianSpecialityController@update');
$router->delete('technician-specialities/{speciality}','TechnicianSpecialityController@destroy');
});