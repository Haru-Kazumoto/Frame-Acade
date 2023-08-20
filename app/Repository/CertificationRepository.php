<?php

namespace App\Repository;
use App\Models\Certifications;
use App\Repository\Interfaces\CertificationRepositoryInterfaces;
use Illuminate\Http\Request;

class CertificationRepository implements CertificationRepositoryInterfaces{
    public function getAllData(array $relations){
        return Certifications::with($relations)->get();
    }

    public function getDataById($id){
        return null;
    }

    public function createData(Request $request){
        return null;
    }

    public function deleteDataById($id){
        return null;
    }

    public function updateDataById($id, Request $request){
        return null;
    }
}