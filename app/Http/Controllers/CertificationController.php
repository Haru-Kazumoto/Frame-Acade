<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Modules;

class CertificationController extends Controller {

    public function index(){
        return Modules::with('subModules')->get();
    }
}
