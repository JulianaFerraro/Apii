<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        return User::all();
    }
    
        public function create(){

        }
        public function store(Request $request){
            $user=User::create($request->all());
            return $user;

        }
        public function show($id){
            return user::find($id);
        }
}
