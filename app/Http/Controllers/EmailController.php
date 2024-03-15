<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chirp;

class EmailController extends Controller
{
    public function email(Request $request) {
        $data = Chirp::with('user')->get();
        // return $user;
        $details = [];
        foreach($data as $key=>$value){
            $details[$key]['user_name'] = $value->user->name;
            $details[$key]['user_email'] = $value->user->email;
            $details[$key]['message'] = $value->message;
        }
        #return $details;
        return view('email', compact('details'));
    }
}
