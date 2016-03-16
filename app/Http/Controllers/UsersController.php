<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function create(){
    	return view('admin.users.create');
    }

    public function store(Request $request){
    	//dd($request->all());
    	$user = new user($request->all());
    	$user -> password = bcrypt($request->password);
    	$user -> save();
    	dd('Usuario creado');
    }
}
