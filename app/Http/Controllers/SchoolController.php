<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function schoolList(){
        $school_data = School::all();
        if($school_data){
            return response()->json([$school_data]);
        }else{
            return response()->json(['status' => true, 'message' => 'Not found data']);
        }
    }


    public function schoolCreate(Request $request){
        $school = new School();

        $school->school_name = $request->name;
        $school->address = $request->address;
        $school->city_id = $request->cid;

        $city_result = $school->save();
        if($city_result){
            return response()->json(['status' => true, 'message' => 'Created']);
        }else{
            return response()->json(['status' => false, 'message' => 'Not Created']);
        }
    }


    public function schoolUpdate(Request $request){
        $school_id = School::find($request->id);

        if($school_id){
            $school_id->school_name = $request->name;
            $school_id->address = $request->address;
            $school_id->city_id = $request->cid;
            $city_updated_result = $school_id->save();
            if($city_updated_result){
                return response()->json(['status' => true, 'message' => 'Updated']);
            }else{
                return response()->json(['status' => false, 'message' => 'Can not be updated']);
            }
        }else{
            return response()->json(['status' => true, 'message' => 'Not Found']);
        }
    }


    public function schoolDelete(Request $request){
        $school_id = School::find($request->id);

        if($school_id){
            $result = $school_id->delete();
            if($result){
                return response()->json(['status' => true, 'message' => 'Deleted']);
            }else{
                return response()->json(['status' => false, 'message' => 'Can not be deleted']);
            }
        }
        else{
            return response()->json(['status' => false, 'message' => 'Not found ID']);
        }
    }
}
