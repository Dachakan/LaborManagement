<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SearchController extends Controller
{
    public function search() {
        $dt = Carbon::now()->timestamp;
        echo Carbon::createFromTimestamp($dt)->format("Y/m/d H:i:s");
        return view('search');
    }
    
    public function result() {
        return view('result');
    }
}
