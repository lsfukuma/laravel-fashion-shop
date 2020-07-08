<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class ClothController extends Controller
{
    public function shop(){
        $clothes = Cloth::all();
        dd($clothes);
    }
}
