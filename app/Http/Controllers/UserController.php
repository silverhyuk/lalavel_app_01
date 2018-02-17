<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('can')->except('show');
        //$this->middleware('can')->only('show');
    }

    public function show($id=0){
        return $id;
    }
    public function edit($id=0){
        return 'Edit';
    }
}
