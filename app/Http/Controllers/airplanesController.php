<?php

namespace App\Http\Controllers;
use App\Airplane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class airplanesController extends Controller
{
    public function index(Request $request)
    {
        // $data = $request->json()->all();
        //   $sql = 'SELECT * FROM "Airplanes"';
        // $response = DB::select($sql);
        // return response()->json($response,200);
        if($request->isJson()){
            $sql = 'SELECT * FROM "Airplanes"';
          $response = DB::select($sql);
            return response()->json($response,200);
            }
        return response()->json(['error'=>'Unauthorized'], 401,[]);

    }
    public function createAirplane(Request $request)
    {
        if($request->isJson()){

            $data = $request->json()->all();
        $sql = 'insert into "Airplanes"(model, code, capacity) values(?,?,?)';
        $parameters = [$data['model'],
                       $data['code'],
                       $data['capacity']];
        $response = DB::select($sql, $parameters);
        return response()->json($parameters,201);
        }
     return response()->json(['error'=>'Unauthorized'], 401,[]);

    }
    public function updateAirplane(Request $request)
     {
        $data = $request -> json() -> all();
        $sql ='UPDATE "Airplanes"
        SET  model=?, code=?, capacity=?';
        $parameters = [$data['model'],
        $data['code'],
        $data['capacity']];
        $response = DB::select($sql, $parameters);
        return response()->json($parameters,201);
     }
     function deleteAirplane(Request $request){
      $sql= 'delete from "Airplanes" where :id';
      $parametres =[$data['id']];
      $response = DB::select($sql, $parameters);
            return response()->json($parametres,201);
          }
      }


