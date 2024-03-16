<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function stateList(){
        $state_result = State::all();
        return $state_result;
    }


    public function stateCreate(Request $request){
        $state = new State();
        $state->state_name = $request->state_name;
        $state->save();
        $state_id = $state->id;

        if($state_id){
            return response()->json(['state' => true, 'message' => 'Created']);
        }else{
            return response()->json(['state' => false, 'message' => 'Not Created']);
        }
    }


    public function stateUpdate(Request $request){
        $state_id = State::find($request->id);
        if($state_id){
            $state_id->state_name = $request->name;
            $result = $state_id->update();
            if($result){
                return response()->json(['state' => true, 'message' => 'Updated']);
            }else{
                return response()->json(['state' => false, 'message' => 'Not Updated']);
            }
        }else{
            return response()->json(['state' => false, 'message' => 'state not found']);
        }
    }


    public function stateDelete(Request $request){
        $state_id = State::find($request->id);

        if($state_id){
            $state_id->delete();
            return response()->json(['state' => true, 'message' => 'Deleted']);
        }else{
            return response()->json(['state' => false, 'message' => 'Not Deleted']);
        }
    }
}
