<?php

namespace App\Http\Controllers\api;
use App\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return Customer::all();
    }
    
        public function create(){

        }
        public function store(Request $request){
            $cliente=Customer::create($request->all());
            return $cliente;
        }
        public function show($id){
            $cliente = User::
            select('user.name','users.lastname','user.email',
            'users.phone','users.residence_address',
            'customers.user_avalability_id')
            ->join('customers','users_id','=','customers.users_id')
            ->where('customer.user_availability_id','=', 1)
            ->get();

            return $cliente;
}
}