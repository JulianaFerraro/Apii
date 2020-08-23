<?php

namespace App\Http\Controllers\api;
use App\UserAvailability;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class User_AvailabilityControler extends Controller
{
    public function index(){
        return UserAvailability::all();
    }
    
        public function create(){

        }
        public function store(Request $request){
            $useravailability=UserAvailability::create($request->all());
            return $useravailability;

        }
        public function show($id){
            return UserAvailability::find($id);
        }
}
