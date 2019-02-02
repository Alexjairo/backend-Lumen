<?php

namespace App\Http\Controllers;
use App\seatDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class seatDetailController extends Controller
{
    public function index(Request $request)
    {
        // $data = $request->json()->all();
        //   $sql = 'SELECT * FROM "Airplanes"';
        // $response = DB::select($sql);
        // return response()->json($response,200);
        if($request->isJson()){
            $sql = 'SELECT * FROM "seatDetails"';
          $response = DB::select($sql);
            return response()->json($response,200);
            }
        return response()->json(['error'=>'Unauthorized'], 401,[]);

    }
    public function createSeatDetail(Request $request)
    {
        if($request->isJson()){

            $data = $request->json()->all();
        $sql = 'INSERT INTO "seatDetails"(
             state, seat_id, airplane_id)
            VALUES (?, ?, ?, ?);';
        $parameters = [$data['state'],
                       $data['seat_id'],
                       $data['airplane_id']];
        $response = DB::select($sql, $parameters);
        return response()->json($parameters,201);
        }
     return response()->json(['error'=>'Unauthorized'], 401,[]);

    }
    public function updateSeatDetail(Request $request)
     {
        $data = $request -> json() -> all();
        $sql ='UPDATE "seatDetails"
        SET seatdetail_id=?, state=?, seat_id=?, airplane_id=?';
        $parameters = [$data['state'],
        $data['seat_id'],
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
