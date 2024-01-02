<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/education', 'EducationController@index');
//$router->get('/education/{id}', 'EducationController@show');
//$router->post('/education', 'EducationController@store');
//$router->put('/education', 'EducationController@update');
//$router->delete('/education/{id}', 'EducationController@destroy');

$router->get('/experience', 'ExperienceController@index');
//$router->get('/experience/{id}', 'ExperienceController@show');
//$router->post('/experience', 'ExperienceController@store');
//$router->put('/experience', 'ExperienceController@update');
//$router->delete('/experience/{id}', 'ExperienceController@destroy');

$router->get('/observation', 'ObservationController@getObservation');

$router->get('/project', 'ProjectController@index');
//$router->get('/project/{id}', 'ProjectController@show');
//$router->post('/project', 'ProjectController@store');
//$router->put('/project', 'ProjectController@update');
//$router->delete('/project/{id}', 'ProjectController@destroy');

$router->get('/skill', 'SkillController@index');
//$router->get('/skill/{id}', 'SkillController@show');
//$router->post('/skill', 'SkillController@store');
//$router->put('/skill', 'SkillController@update');
//$router->delete('/skill/{id}', 'SkillController@destroy');

$router->get('/volunteer', 'VolunteerController@index');
//$router->get('/volunteer/{id}', 'VolunteerController@show');
//$router->post('/volunteer', 'VolunteerController@store');
//$router->put('/volunteer', 'VolunteerController@update');
//$router->delete('/volunteer/{id}', 'VolunteerController@destroy');

$router->get('/', function () use ($router) {
    return $router->app->version();
});
