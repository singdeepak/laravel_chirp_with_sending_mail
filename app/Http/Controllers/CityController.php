<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function cityList(){
        $city_data = City::all();
        if($city_data){
            return $city_data;
        }else{
            return response()->json(['status' => false, 'message' => 'Not found any data']);
        }
    }


    public function cityCreate(Request $request){
        $city = new City();
        $city->city_name = $request->name;
        $city->state_id = $request->id;
        $city_result = $city->save();

        if($city_result){
            return response()->json(['status' => true, 'message' => 'created']);
        }else{
            return response()->json(['status' => false, 'message' => 'Not created']);
        }
    }


    public function cityUpdate(Request $request){
        $city_id = City::find($request->id);

        if($city_id){
            $city_id->city_name = $request->name;
            $city_id->state_id = $request->sid;
            $city_result = $city_id->save();
            if($city_result){
                return response()->json(['status' => true, 'message' => 'Updated']);
            }else{
                return response()->json(['status' => true, 'message' => 'Can not pdated']);
            }
        }else{
            return response()->json(['status' => false, 'message' => 'Not found']);
        }
    }


    public function cityDelete(Request $request){
        $city_id = City::find($request->id);

        if($city_id){
            $city_result = $city_id->delete();
            if($city_result){
                return response()->json(['status' => true, 'message' => 'Deleted']);
            }else{
                return response()->json(['status' => false, 'message' => 'can not found']);
            }
        }else{
            return response()->json(['status' => false, 'message' => 'Not found']);
        }
    }
}
