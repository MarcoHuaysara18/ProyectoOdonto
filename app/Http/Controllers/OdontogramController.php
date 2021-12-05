<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OdontogramController extends Controller
{
    public function index(){
        return view('odontogram.index');
    }
}
