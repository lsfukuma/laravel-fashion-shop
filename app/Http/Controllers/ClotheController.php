<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothe;

class ClotheController extends Controller
{
    public function shop(){
        $clothes = Clothe::all();
        return view ('shop', ['clothes' => $clothes]);
    }
}
