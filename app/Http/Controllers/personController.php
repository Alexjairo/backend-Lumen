<?php

namespace App\Http\Controllers;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class personController extends Controller
{
    public function index(Request $request)
    {
        // $data = $request->json()->all();
        //   $sql = 'SELECT * FROM "Airplanes"';
        // $response = DB::select($sql);
        // return response()->json($response,200);
        if($request->isJson()){
            $sql = 'SELECT * FROM "Persons"';
          $response = DB::select($sql);
            return response()->json($response,200);
            }
        return response()->json(['error'=>'Unauthorized'], 401,[]);

    }
    public function createPerson(Request $request)
    {
        if($request->isJson()){

            $data = $request->json()->all();
        $sql = 'INSERT INTO "Persons"(
           name, lastname, address, email, phone, "cellPohe", city, country, "postalCode")
            VALUES (  ?, ?, ?, ?, ?, ?, ?, ?,?);';
        $parameters = [$data['name'],
                       $data['lastname'],
                       $data['address'],
                       $data['email'],
                       $data['phone'],
                       $data['cellphone'],
                       $data['city'],
                       $data['country'],
                       $data['postalCode']];
        $response = DB::select($sql, $parameters);
        return response()->json($parameters,201);
        }
     return response()->json(['error'=>'Unauthorized'], 401,[]);

    }
    public function updatePerson(Request $request)
     {
        $data = $request -> json() -> all();
        $sql ='UPDATE "Persons"
        SET name=?, lastname=?, address=?, email=?, phone=?, "cellPohe"=?, city=?, country=?, "postalCode"=?, created_at=?, updated_at=?
        ';
        $parameters = [$data['name'],
        $data['lastname'],
        $data['address'],
        $data['email'],
        $data['phone'],
        $data['cellphone'],
        $data['city'],
        $data['country'],
        $data['postalCode']];
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
