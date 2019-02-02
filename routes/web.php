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

$router->get('/', function () use ($router) {
    return $router->app->version();
});
// routes airplane
$router->get('/airplanes',['uses'=>'airplanesController@index']);
$router-> post('/airplanes',['uses'=>'airplanesController@createAirplane']);
$router-> put('/airplanes',['uses'=>'airplanesController@updateAirplane']);
$router-> delete('/airplanes',['uses'=>'airplanesController@destroyAirplane']);

// routes seat
$router->get('/seat',['uses'=>'seatController@index']);
$router-> post('/seat',['uses'=>'seatController@createSeat']);
$router-> put('/seat',['uses'=>'seatController@updateSeat']);
$router-> delete('/seat',['uses'=>'seatController@destroySeat']);

//routes seatDetail
$router->get('/seatDetail',['uses'=>'seatDetailController@index']);
$router-> post('/seatDetail',['uses'=>'seatDetailController@createseatDetail']);
$router-> put('/seatDetail',['uses'=>'seatDetailController@updateseatDetail']);
$router-> delete('/seatDetail',['uses'=>'seatDetailController@destroyseatDetail']);

// routes airport
$router->get('/airport',['uses'=>'airportController@index']);
$router-> post('/airport',['uses'=>'airportController@createAirport']);
$router-> put('/airport',['uses'=>'airportController@updateAirport']);
$router-> delete('/airport',['uses'=>'airportController@destroyAirport']);


// routes typeFlight
$router->get('/typeFlight',['uses'=>'typeFlightController@index']);
$router-> post('/typeFlight',['uses'=>'typeFlightController@createTypeFlight']);
$router-> put('/typeFlight',['uses'=>'typeFlightController@updateTypeFlight']);
$router-> delete('/typeFlight',['uses'=>'typeFlightController@destroyTypeFlight']);

//routes flights
$router->get('/flights',['uses'=>'flightsController@index']);
$router-> post('/flights',['uses'=>'flightsController@createFlights']);
$router-> put('/flights',['uses'=>'flightsController@updateFlights']);
$router-> delete('/flights',['uses'=>'flightsController@destroyFlights']);

// routes reservation
$router->get('/reservation',['uses'=>'reservationController@index']);
$router-> post('/reservation',['uses'=>'reservationController@createReservation']);
$router-> put('/reservation',['uses'=>'reservationController@updateReservation']);
$router-> delete('/reservation',['uses'=>'reservationController@destroyReservation']);

// reservationDetails
$router->get('/reservationDetails',['uses'=>'reservationDetailsController@index']);
$router-> post('/reservationDetails',['uses'=>'reservationDetailsController@createReservationDetails']);
$router-> put('/reservationDetails',['uses'=>'reservationDetailsController@updateReservationDetails']);
$router-> delete('/reservationDetails',['uses'=>'reservationDetailsController@destroyReservationDetails']);

// routes person
$router->get('/person',['uses'=>'personController@index']);
$router-> post('/person',['uses'=>'personController@createPerson']);
$router-> put('/person',['uses'=>'personController@updatePerson']);
$router-> delete('/person',['uses'=>'personController@destroyPerson']);
