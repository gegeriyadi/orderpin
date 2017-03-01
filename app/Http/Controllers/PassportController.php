<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passport;
use App\User;
use App\Http\Controllers\Controller;

class PassportController extends Controller
{
    public function showProfile($id){
    	return view('passport', ['user' => User::findOrFail($id)]);
    }
}
