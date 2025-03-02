<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response; //Response Component
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    private $request;

    public function _construct(Request $request){
        $this->request = $request;
    }
    public function getUsers(){
        
        $users = User::all();
        return response()->json($users, 200);
    }
}