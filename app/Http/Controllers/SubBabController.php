<?php

namespace App\Http\Controllers;

use App\Models\SubBab;
use Illuminate\Http\Request;

class SubBabController extends Controller
{
    public function show(SubBab $subBab){
        return view('subbab.show', ['subBab'=> $subBab]);
    }
}
