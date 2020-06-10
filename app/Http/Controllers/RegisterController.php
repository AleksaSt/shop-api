<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request){
        $manager = User::create($request->except('terms_and_conditions', 'confirm_password'));

        $manager['password'] = bcrypt($manager['password']);

        $manager->save();

    }
}
