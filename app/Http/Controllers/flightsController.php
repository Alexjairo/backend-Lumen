<?php

namespace App\Http\Controllers;
use App\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class flightsController extends Controller
{
    public function index(Request $request)
    {
        // $data = $request->json()->all();
        //   $sql = 'SELECT * FROM "Airplanes"';
        // $response = DB::select($sql);
        // return response()->json($response,200);
        if($request->isJson()){
            $sql = 'SELECT * FROM "Flights"';
          $response = DB::select($sql);
            return response()->json($response,200);
            }
        return response()->json(['error'=>'Unauthorized'], 401,[]);

    }
    public function createFligths(Request $request)
    {
        if($request->isJson()){

            $data = $request->json()->all();
        $sql = 'INSERT INTO public."Flights"(dest, dateflight, type_flight, airport_arrive, airport_departure, airplane_id)
            VALUES (?, ?, ?, ?, ?, ?);';
        $parameters = [$data['dest'],
                       $data['dateflight'],
                       $data['type_flight'],
                       $data[' airport_arrive'],
                       $data['airport_departure'],
                    $data['airplane_id']];
        $response = DB::select($sql, $parameters);
        return response()->json($parameters,201);
        }
     return response()->json(['error'=>'Unauthorized'], 401,[]);

    }
    public function updateFlight(Request $request)
     {
        $data = $request -> json() -> all();
        $sql ='UPDATE "Flights"
        SET dest=?, dateflight=?, type_flight=?, airport_arrive=?, airport_departure=?, airplane_id=?
        WHERE <condition>;';
        $parameters = [$data['dest'],
        $data['dateflight'],
        $data['type_flight'],
        $data[' airport_arrive'],
        $data['airport_departure'],
     $data['airplane_id']];
        $response = DB::select($sql, $parameters);
        return response()->json($parameters,201);
     }
     function destroyAirplane(Request $request){
        if($request->isJson()){

           $airplane=App\airplane::detroy($code);
            return response()->json($airplane,201);
          }
       return response()->json(['error'=>'Unauthorized'], 401,[]);

      }

}
