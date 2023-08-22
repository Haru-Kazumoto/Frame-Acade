<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Modules;

class CertificationController extends Controller
{

    public function index()
    {

        return view("certification");
    }
    public function get()
    {
        return Modules::with('subModules')->get();
    }
}
