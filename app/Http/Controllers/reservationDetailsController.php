<?php

namespace App\Http\Controllers;
use App\reservationDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class reservationDetailsController extends Controller
{
    public function index(Request $request)
    {
        // $data = $request->json()->all();
        //   $sql = 'SELECT * FROM "Airplanes"';
        // $response = DB::select($sql);
        // return response()->json($response,200);
        if($request->isJson()){
            $sql = 'SELECT * FROM "reservationDetails"';
          $response = DB::select($sql);
            return response()->json($response,200);
            }
        return response()->json(['error'=>'Unauthorized'], 401,[]);

    }
    public function createReservationDetail(Request $request)
    {
        if($request->isJson()){

            $data = $request->json()->all();
        $sql = 'INSERT INTO public."reservationDetails"( flight_id, res_id, seatdetail_id)
            VALUES ( ?, ?, ?);';
        $parameters = [$data['flight_id'],
                       $data['res_id'],
                       $data['seatdetail_id']];
        $response = DB::select($sql, $parameters);
        return response()->json($parameters,201);
        }
     return response()->json(['error'=>'Unauthorized'], 401,[]);

    }
    public function updateReservationDetail(Request $request)
     {
        $data = $request -> json() -> all();
        $sql ='UPDATE public."reservationDetails"
        SET  flight_id=?, res_id=?, seatdetail_id=?';
        $parameters = [$data['flight_id'],
        $data['res_id'],
        $data['seatdetail_id']];
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
