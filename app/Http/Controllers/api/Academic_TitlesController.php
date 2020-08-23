<?php

namespace App\Http\Controllers\api;
use App\AcademicTitles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Academic_TitlesController extends Controller
{
    public function index(){
        return AcademicTitles::all();
    }
    
        public function create(){

        }
        public function store(Request $request){
            $customer=AcademicTitles::create($request->all());
            return $customer;
        }



public function show($Academic_Titles){
                     
    $cliente = User::
     select('users.names','users.lastnames', 
     'users.email','users.phone','users.residence_address',
     'customers.academic_titles_id')
     ->join('customers', 'users.id' , '=', 'customers.users_id')
     ->where('customers.academic_titles_id', '=', 1)
     ->get();

    return $cliente;



 }

    }