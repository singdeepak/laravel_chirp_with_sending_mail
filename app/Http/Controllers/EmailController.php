<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chirp;
use App\Models\User;

class EmailController extends Controller
{
    // public function email(Request $request) {
    //     $data = Chirp::with('user')->get();
    //     // return $user;
    //     $details = [];
    //     foreach($data as $key=>$value){
    //         $details[$key]['user_id'] = $value->user_id;
    //         $details[$key]['user_name'] = $value->user->name;
    //         $details[$key]['user_email'] = $value->user->email;
    //         $details[$key]['message'] = $value->message;
    //     }
    //     #return $details;
    //     return view('email', compact('details'));
    // }


    // public function (Request $request){
    //     // code 
    //     //user 
    //     //msg

    //     // if($user->email){
    //         // $this->sendMail($user,$mssg)
    //     // }
    // }


    public function sendMail($user){
        $data = Chirp::with('user')->get();
        $user_email = User::where('email',$user?->email)->first();
        $user_email = User::where('email',$user?->id)->first();

        $user_email = User::where('email',$user?->age)->first();

        // return $user;
        $details = [];
        foreach($data as $key=>$value){
            $details[$key]['user_id'] = $value->user_id;
            $details[$key]['user_name'] = $value->user->name;
            $details[$key]['user_email'] = $value->user->email;
            $details[$key]['message'] = $value->message;

        }
        #return $details;
        return view('email', compact('details'));
    }
}
