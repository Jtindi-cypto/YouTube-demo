<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request -> validate([
            "Name" => ["required","min: 3", "max:16"],
            "Email" => ["required","email"],
            "password" => ["required", "min: 8","max:100"]
        ]);
        return "Hello from our controller!!";

    }
}
