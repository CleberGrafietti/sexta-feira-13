<?php

namespace App\Http\Controllers;

use App\Models\Terror;
use Illuminate\Http\Request;

class TerrorController extends Controller
{
    public function index(){
        $terror = Terror::get();

        return view('terror', ['terror' => $terror]);
    }
}
