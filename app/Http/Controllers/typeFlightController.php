<?php

namespace App\Http\Controllers;
use App\TypeFlight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class typeFlightController extends Controller
{
    public function index(Request $request)
    {
        // $data = $request->json()->all();
        //   $sql = 'SELECT * FROM "Airplanes"';
        // $response = DB::select($sql);
        // return response()->json($response,200);
        if($request->isJson()){
            $sql = 'SELECT * FROM "typeFlights"';
          $response = DB::select($sql);
            return response()->json($response,200);
            }
        return response()->json(['error'=>'Unauthorized'], 401,[]);

    }
    public function createTypeFlight(Request $request)
    {
        if($request->isJson()){

            $data = $request->json()->all();
        $sql = 'INSERT INTO "typeFlights"(
             name, description)
            VALUES (?,  ?);';
        $parameters = [$data['name'],
                       $data['description']];
        $response = DB::select($sql, $parameters);
        return response()->json($parameters,201);
        }
     return response()->json(['error'=>'Unauthorized'], 401,[]);

    }
    public function updateTypeFlight(Request $request)
     {
        $data = $request -> json() -> all();
        $sql ='UPDATE "typeFlights"
        SET  name=?, description=?';
        $parameters = [$data['name'],
        $data['description']];
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
