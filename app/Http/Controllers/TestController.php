<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        return 'TestController Invoke';
    }
    public function test(){
        return 'TestController Test Function';
    }
}
