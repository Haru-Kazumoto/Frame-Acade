<?php

namespace App\Repository;
use App\Models\Frameworks;
use App\Repository\Interfaces\FrameworkRepositoryInterfaces;
use Illuminate\Http\Request;

class FrameworkRepository implements FrameworkRepositoryInterfaces{
    public function getAllData(array $relations){
        return Frameworks::with($relations)->get();
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