<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassMate;

class ClassMateController extends Controller
{
    public function apsveikt() 
    {
        $classMates = ClassMate::all();

        return view("apsveikums", ["classMates" => $classMates]);
    }
}
