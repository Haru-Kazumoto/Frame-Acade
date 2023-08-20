<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repository\Interfaces\CertificationRepositoryInterfaces;
use Illuminate\Http\Request;

class CertificationController extends Controller {
    private CertificationRepositoryInterfaces $certificationRepository;

    public function __construct(CertificationRepositoryInterfaces $certificationRepository){
        $this->certificationRepository = $certificationRepository;
    }

    public function index(){
        return view('partials.test');
    }

    public function getCertificate(){
    }

}
