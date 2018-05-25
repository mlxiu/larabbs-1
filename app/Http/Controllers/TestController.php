<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class TestController extends Controller
{

    public function log(Request $request)
    {
        $str = $request->input('str');

        Log::info($str);
    }
}
