<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index');
    }

    public function store(RegisterRequest $request){
        $data = $request->all();
        // dd($data);
        User::create($data);
        return redirect()->route('register.index')->with('success', 'Register success');
    }
}
